<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public $urls = [];

    public $html;

    public $proxys_list;

    public $list = [];

    public function __construct()
    {

    }

    public function main(Request $request)
    {
        $this->urls[] = $request->input('url');
        
        $this->html = $this->multiRequest($this->urls);

        $this->proxys_list = $this->pars($this->html);
        // var_dump ($this->proxys_list);
        // $this->proxys_list = json_decode(implode($this->proxys_list));
// exit();
        return $this->proxys_list;
    }

    public function multiRequest($urls)
    {
        $multi = curl_multi_init();

        $handles = [];

        foreach ( $urls as $url)
        {
            $ch = curl_init( $url );

            curl_setopt ( $ch, CURLOPT_HEADER, false );

            curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, true );


            curl_multi_add_handle( $multi, $ch );

            $handles[ $url ] = $ch;
        }

        do 
        {
            $mrc = curl_multi_exec ( $multi, $active );
        }
        while ( $mrc == CURLM_CALL_MULTI_PERFORM );


        while ( $active && $mrc == CURLM_OK )
        {
            //check for returns and execute until everything is done

            if ( curl_multi_select( $multi ) == -1 )
            {
                //if it returns -1, wait a bit, but go forward anyways!

                usleep ( 100 );
            }

            do
            {
                $mrc = curl_multi_exec( $multi, $active );
            }

            while ( $mrc == CURLM_CALL_MULTI_PERFORM );
        }

        foreach ( $handles as $channel )
        {
            $html = curl_multi_getcontent( $channel );

            $htmls[] = $html;

            curl_multi_remove_handle( $multi, $channel );
        }

        curl_multi_close( $multi );
    
        return $htmls;
    }

    public function pars($html)
    {
        foreach ($html as $g)
        {
            \phpQuery::newDocument($g);
            
            $proxys = pq('tbody')->children('tr');

            foreach (pq($proxys) as $prx)
            {
                $this->list[] =  
                [
                    'ip'       => pq($prx)->children('td:nth-child(1)')->html(),
                    'port'     => pq($prx)->children('td:nth-child(2)')->html(),
                    'sity'     => pq($prx)->children('td:nth-child(3)')->html(),
                    'speed'    => pq($prx)->children('td:nth-child(4)')->html(),
                    'type'     => pq($prx)->children('td:nth-child(5)')->html(),
                    'anon'     => pq($prx)->children('td:nth-child(6)')->html(),
                    'last_ref' => pq($prx)->children('td:nth-child(7)')->html(),
                ];
            }

            \phpQuery::unloadDocuments();

        }

        return $this->list;
    }
}
