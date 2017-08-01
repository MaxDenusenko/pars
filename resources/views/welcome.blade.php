@extends('layouts.main')


@section('content')
<div id="app">
  <nav class="flex_head">
    <div class="container flex_head top_container">
      <div class="logo">
        <a href="/">@{{ logo }}</a>
      </div>
      <div class="menu">
        <form method="POST" id="formx" action="javascript:void(null);">
          <input v-if="url.path.length > 0" class="url_input" v-bind:class = "{ noValid : !validation }" v-on:keyup.enter="get_html_url" id="url"  v-model="url.path" type="text" name="url" placeholder="Url">
          <input v-else class="url_input" v-on:keyup.enter="get_html_url" id="url"  v-model="url.path" type="text" name="url" placeholder="Url">
        </form>
      </div>
      <button class="b_search" v-on:click.prevent="get_html_url">
          <i v-if="url.path.length > 0" v-bind:class = "{ noValid : !validation }" class="fa fa-search" aria-hidden="true"></i>
          <i v-else class="fa fa-search" aria-hidden="true"></i>
      </button>
    </div>
  </nav>

  <div id="result">
     <pre>
      @{{ $data }}

      @{{ construct_table }}
    </pre> 
    
     <!-- <ul id="header"></ul>
     <div id="leftColum"></div> 
     <div id="twoColum"></div> -->
    
      <table id="resultTable">
      <thead>
        <tr>
          <th>#</th>
          <th>Original URL inalinal</th>
          <th>Original URL</th>
          <th>Original URLinal</th>
          <th>Original URL</th>
          <th>Original URL inalinalinal</th>
          <th>Original URL inalinalinal</th>
          <th>Original URL inalinalinal</th>
          <th>Original URL inalinalinal</th>
          <th>Original URL inalinalinal</th>
          <th>Original URL inalinalinal</th>
          <th>Original URL inalinalinal</th>
          <th>Original URL inalinalinal</th>
          <th>Original URL inalinalinal</th>
          <th>Original URL inalinalinal</th>
        </tr>
      </thead>

      <!-- <tfoot>
        <tr>
          <td></td>
        </tr>
      </tfoot> -->
  
      <tbody>
        <tr>
          <td>#1</td>
          <td>headddda</td>
          <td>good.glgood.gl good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td><img src="http://www.spirit-of-metal.com/les%20goupes/H/HYTS/pics/logo.jpg" alt=""></td>
          <td>good.gl</td>
          <td>good.gl</td>
        </tr>
        <tr>
          <td>#2</td>
          <td>headddda</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.glgood.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
        </tr>
        <tr>
          <td>#3</td>
          <td>good.gl good.glgood.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.glgood.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td><img src="http://www.spirit-of-metal.com/les%20goupes/H/HYTS/pics/logo.jpg" alt=""></td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
        </tr>
        <tr>
          <td>#4</td>
          <td>good.gl good.glgood.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.glgood.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
        </tr>
        <tr>
          <td>#5</td>
          <td>good.gl good.glgood.gl</td>
          <td><img src="http://www.spirit-of-metal.com/les%20goupes/H/HYTS/pics/logo.jpg" alt=""></td>
          <td>good.gl</td>
          <td>good.glgood.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
        </tr>
        <tr>
          <td>#6</td>
          <td>good.gl good.glgood.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.glgood.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
        </tr>
        <tr>
          <td>#7</td>
          <td>good.gl good.glgood.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.glgood.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
        </tr>
        <tr>
          <td>#8</td>
          <td>good.gl good.glgood.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.glgood.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
        </tr>
        <tr>
          <td>#9</td>
          <td>good.gl good.glgood.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.glgood.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
        </tr>
        <tr>
          <td>#10</td>
          <td>good.gl good.glgood.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.glgood.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
        </tr>
        <tr>
          <td>#11</td>
          <td>good.gl good.glgood.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.glgood.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
        </tr>
        <tr>
          <td>#12</td>
          <td>good.gl good.glgood.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.glgood.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
        </tr>
        <tr>
          <td>#13</td>
          <td>good.gl good.glgood.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.glgood.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
        </tr>
        <tr>
          <td>#14</td>
          <td>good.gl good.glgood.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.glgood.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
          <td>good.gl</td>
        </tr>
      </tbody>

      <!-- <tfoot>
        <tr>
          <div class="pagination">pagination</div>
        </tr>
      </tfoot> -->
    </table>  


  </div>
</div>

    <!-- <div class="">
      <div class="">
        <div class=" col s12 white z-depth-2 padding center-align">
          <form method="POST" id="formx" action="javascript:void(null);" onsubmit="call()">
            <div class="input-field ">
              <input placeholder="http://https://hidester.com/proxylist/" id="url" name="url" type="text" class="validate">
              <label for="first_name">Url</label>
            </div>
          </form>
          <a class="waves-effect waves-light btn black" id="search">></a>
        </div>
      </div>
    </div> -->
@endsection