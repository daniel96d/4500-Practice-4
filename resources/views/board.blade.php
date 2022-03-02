@extends('adminlte::page')

@section('title', '')

@section('content_header')
    <h1>Board</h1>
@stop

@section('content')
  <div class="row">

    <div class="col-md-3 col-sm-6 col-12">
      <div class="card card-row card-secondary">
        <div class="card-header">
            <h3 class="card-title"> Backlog </h3>
            ::after
        </div>

        //first subbox for backlog
        <div class="card-body">
          <div class="card card-info card-outline">
            <div class="card-header">
              <h5 class="card-title">Create Labels</h5>
              <div class="card-tools">
                <a href="#" class="btn btn-tool btn-link">#3</a>
                <a href="#" class="btn btn-tool">
                  <i class="fas fa-pen">
                    ::before
                  </i>
                </a>
              </div>
              ::after
            </div class="card-body">
            <div class="custom-controll custom-checkbox">
              <input class="custom-control-input" type="checkbox"
              id="customCheckbox1" disabled>
              <label for="customCheckbox1" class="custom-controllabel">
                ::before
                "BUG"
                ::after
              </label>
            </div>
            <div class="custom-controll custom-checkbox">
              <input class="custom-control-input" type="checkbox"
              id="customCheckbox2" disabled>
              <label for="customCheckbox2" class="custom-controllabel">
                ::before
                "Feature"
                ::after
              </label>
            </div>
            <div class="custom-controll custom-checkbox">
              <input class="custom-control-input" type="checkbox"
              id="customCheckbox3" disabled>
              <label for="customCheckbox3" class="custom-controllabel">
                ::before
                "Enhancement"
                ::after
              </label>
            </div>
            <div class="custom-controll custom-checkbox">
              <input class="custom-control-input" type="checkbox"
              id="customCheckbox4" disabled>
              <label for="customCheckbox4" class="custom-controllabel">
                ::before
                "Documentation"
                ::after
              </label>
            </div>
            <div class="custom-control custom-checkbox">
              <input class="custom-control-input" type="checkbox"
              id="customCheckbox5" disabled>
              <label for="customCheckbox5" class="custom-controllabel">
                ::before
                "Examples"
                ::after
              </label>
            </div>
            ::after
          </div>
        </div>

        //second block inside backlog
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h5 class="card-title">Create Issue template</h5>
            <div class="card-tools">
              <a href="#" class="btn btn-tool btn-link">#4</a>
              <a href="#" class="btn btn-tool">
                <i class="fas fa-pen">
                  ::before
                </i>
              </a>
            </div>
            ::after
          </div class="card-body">
          <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox"
            id="customCheckbox1" disabled>
            <label for="customCheckbox1" class="custom-controllabel">
              ::before
              "BUG Report"
              ::after
            </label>
          </div>
          <div class="custom-controll custom-checkbox">
            <input class="custom-control-input" type="checkbox"
            id="customCheckbox2" disabled>
            <label for="customCheckbox2" class="custom-controllabel">
              ::before
              "Feature request"
              ::after
            </label>
          </div>
          ::after
        </div>
      </div>
      ::after
    </div>

    <div class="col-md-3 col-sm-6 col-12">
      <div class="card card-row card-secondary">
        <div class="card-header">
            <h3 class="card-title"> To Do </h3>
            ::after
        </div>
           <div class="card-body">
             <div class="card card-primary card-outline">
               <div class+"card-header".
               <h5 class+"card-title">Create first milestone</h5>
               <div class="card-tools">
                 <a href="#" class="btn btn-tool btn-link">#5</a>
                 <a href="#" class="btn btn-tool">
                   <i class="fas fa-pen">
                     ::before
                   </i>
                 </a>
               </div>
               ::after
             </div>
           </div>
           ::after
         </div>
       </div>
     </div>

    <div class="col-md-3 col-sm6 col-12">
      <div class="card card-row card-default">
        <div class="card-header bg-inf">
          <h3 class="card-title"> In Progress </h3>
          ::after
        </div>
        <div class="card-body">
          <div class="card card-light card-outline">
            <div class="card-header">
              <h5 class="card-title"> Update Readme</h5>
              <div class="card-tools">
                <a href="#" class="btn btn-tool btn-link">#2</a>
                <a href="#" class="btn btn-tool">
                  <i class="fas fa-pen">
                    ::before
                  </i>
                </a>
              </div>
              ::after
            </div>
            <div class="card-body">
              <p> Post application address in the readme. </p>
              ::after
            </div>
          </div>
          ::after
        </div>
      </div>
    </div>

    <div class="col-nd-3 col-sm-6 col-12">
      <div class="card card-row card0success">
        <div class="card-header">
          <h3 class="card-title"> Done </h3>
          ::after
        </div>
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h5 class="card-title">Create repo</h5>
            <div class="card-tools">
              <a href="#" class="btn btn-tool btn-link">#1</a>
              <a href="#" class="btn btn-tool">
                <i class="fas fa-pen">
                  ::before
                </i>
              </a>
            </div>
            ::after
          </div>
        </div>
        ::after
      </div>
    </div>
  </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
