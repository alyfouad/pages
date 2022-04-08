@extends('layouts.app')

@section('css')
<link href="assets/plugins/jquery-datatable/media/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/jquery-datatable/extensions/FixedColumns/css/dataTables.fixedColumns.min.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/datatables-responsive/css/datatables.responsive.css" rel="stylesheet" type="text/css" media="screen" />
@endsection


@section('content')
<div data-pages="parallax">
    <div class="container-fluid p-l-25 p-r-25 sm-p-l-0 sm-p-r-0">
      <div class="inner" style="transform: translateY(0px); opacity: 1;">
        <!-- START BREADCRUMB -->
        <ol class="breadcrumb sm-p-b-5">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </div>
    </div>
  </div>
<div class=" container-fluid   container-fixed-lg bg-white">
    <!-- START card -->
    <div class="card card-transparent">
      <div class="card-header ">
        <div class="card-title">Pages Default Tables Style
        </div>
        <div class="pull-right">
          <div class="col-xs-12">
            <input type="text" id="search-table" class="form-control pull-right" placeholder="Search">
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="card-body">
        <table class="table table-hover demo-table-search table-responsive-block" id="tableWithSearch">
          <thead>
            <tr>
              <th>Title</th>
              <th>Places</th>
              <th>Activities</th>
              <th>Status</th>
              <th>Last Update</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="v-align-middle semi-bold">
                <p>First Tour</p>
              </td>
              <td class="v-align-middle"><a href="#" class="btn btn-tag">United States</a><a href="#" class="btn btn-tag">India</a>
                <a href="#" class="btn btn-tag">China</a><a href="#" class="btn btn-tag">Africa</a>
              </td>
              <td class="v-align-middle">
                <p>it is more then ONE nation/nationality as its fall name is The United Kingdom of Great Britain and North Ireland..</p>
              </td>
              <td class="v-align-middle">
                <p>Public</p>
              </td>
              <td class="v-align-middle">
                <p>April 13,2014 10:13</p>
              </td>
            </tr>
            <tr>
              <td class="v-align-middle semi-bold">
                <p>Among the children</p>
              </td>
              <td class="v-align-middle"><a href="#" class="btn btn-tag">United States</a><a href="#" class="btn btn-tag">India</a>
                <a href="#" class="btn btn-tag">China</a><a href="#" class="btn btn-tag">Africa</a>
              </td>
              <td class="v-align-middle">
                <p>you want English, Scottish, Welsh, Irish, British, European or UK even a British (name other original country you came form or have roots to E.G. A British Japanese or a 5th generation
                </p>
              </td>
              <td class="v-align-middle">
                <p>Public</p>
              </td>
              <td class="v-align-middle">
                <p>April 13,2014 10:13</p>
              </td>
            </tr>
            <tr>
              <td class="v-align-middle semi-bold">
                <p>A day to remember</p>
              </td>
              <td class="v-align-middle"><a href="#" class="btn btn-tag">United States</a><a href="#" class="btn btn-tag">India</a>
                <a href="#" class="btn btn-tag">China</a><a href="#" class="btn btn-tag">Africa</a>
              </td>
              <td class="v-align-middle">
                <p>UK was on top of the art world 18-19 century had the best food, best cloths and best entertainment back then) it was a hyper nation</p>
              </td>
              <td class="v-align-middle">
                <p>Public</p>
              </td>
              <td class="v-align-middle">
                <p>April 13,2014 10:13</p>
              </td>
            </tr>
            <tr>
              <td class="v-align-middle semi-bold">
                <p>Life’s sadness shared</p>
              </td>
              <td class="v-align-middle"><a href="#" class="btn btn-tag">United States</a><a href="#" class="btn btn-tag">India</a>
                <a href="#" class="btn btn-tag">China</a><a href="#" class="btn btn-tag">Africa</a>
              </td>
              <td class="v-align-middle">
                <p>he world speaks English. Common law, Magna Carta and the Bill of Rights are its wonderful legacy
                </p>
              </td>
              <td class="v-align-middle">
                <p>Public</p>
              </td>
              <td class="v-align-middle">
                <p>April 13,2014 10:13</p>
              </td>
            </tr>
            <tr>
              <td class="v-align-middle semi-bold">
                <p>First Tour</p>
              </td>
              <td class="v-align-middle"><a href="#" class="btn btn-tag">United States</a><a href="#" class="btn btn-tag">India</a>
                <a href="#" class="btn btn-tag">China</a><a href="#" class="btn btn-tag">Africa</a>
              </td>
              <td class="v-align-middle">
                <p>it is more then ONE nation/nationality as its fall name is The United Kingdom of Great Britain and North Ireland..</p>
              </td>
              <td class="v-align-middle">
                <p>Public</p>
              </td>
              <td class="v-align-middle">
                <p>April 13,2014 10:13</p>
              </td>
            </tr>
            <tr>
              <td class="v-align-middle semi-bold">
                <p>First Tour</p>
              </td>
              <td class="v-align-middle"><a href="#" class="btn btn-tag">United States</a><a href="#" class="btn btn-tag">India</a>
                <a href="#" class="btn btn-tag">China</a><a href="#" class="btn btn-tag">Africa</a>
              </td>
              <td class="v-align-middle">
                <p>it is more then ONE nation/nationality as its fall name is The United Kingdom of Great Britain and North Ireland..</p>
              </td>
              <td class="v-align-middle">
                <p>Public</p>
              </td>
              <td class="v-align-middle">
                <p>April 13,2014 10:13</p>
              </td>
            </tr>
            <tr>
              <td class="v-align-middle semi-bold">
                <p>First Tour</p>
              </td>
              <td class="v-align-middle"><a href="#" class="btn btn-tag">United States</a><a href="#" class="btn btn-tag">India</a>
                <a href="#" class="btn btn-tag">China</a><a href="#" class="btn btn-tag">Africa</a>
              </td>
              <td class="v-align-middle">
                <p>it is more then ONE nation/nationality as its fall name is The United Kingdom of Great Britain and North Ireland..</p>
              </td>
              <td class="v-align-middle">
                <p>Public</p>
              </td>
              <td class="v-align-middle">
                <p>April 13,2014 10:13</p>
              </td>
            </tr>
            <tr>
              <td class="v-align-middle semi-bold">
                <p>First Tour</p>
              </td>
              <td class="v-align-middle"><a href="#" class="btn btn-tag">United States</a><a href="#" class="btn btn-tag">India</a>
                <a href="#" class="btn btn-tag">China</a><a href="#" class="btn btn-tag">Africa</a>
              </td>
              <td class="v-align-middle">
                <p>it is more then ONE nation/nationality as its fall name is The United Kingdom of Great Britain and North Ireland..</p>
              </td>
              <td class="v-align-middle">
                <p>Public</p>
              </td>
              <td class="v-align-middle">
                <p>April 13,2014 10:13</p>
              </td>
            </tr>
            <tr>
              <td class="v-align-middle semi-bold">
                <p>First Tour</p>
              </td>
              <td class="v-align-middle"><a href="#" class="btn btn-tag">United States</a><a href="#" class="btn btn-tag">India</a>
                <a href="#" class="btn btn-tag">China</a><a href="#" class="btn btn-tag">Africa</a>
              </td>
              <td class="v-align-middle">
                <p>it is more then ONE nation/nationality as its fall name is The United Kingdom of Great Britain and North Ireland..</p>
              </td>
              <td class="v-align-middle">
                <p>Public</p>
              </td>
              <td class="v-align-middle">
                <p>April 13,2014 10:13</p>
              </td>
            </tr>
            <tr>
              <td class="v-align-middle semi-bold">
                <p>First Tour</p>
              </td>
              <td class="v-align-middle"><a href="#" class="btn btn-tag">United States</a><a href="#" class="btn btn-tag">India</a>
                <a href="#" class="btn btn-tag">China</a><a href="#" class="btn btn-tag">Africa</a>
              </td>
              <td class="v-align-middle">
                <p>it is more then ONE nation/nationality as its fall name is The United Kingdom of Great Britain and North Ireland..</p>
              </td>
              <td class="v-align-middle">
                <p>Public</p>
              </td>
              <td class="v-align-middle">
                <p>April 13,2014 10:13</p>
              </td>
            </tr>
            <tr>
              <td class="v-align-middle semi-bold">
                <p>First Tour</p>
              </td>
              <td class="v-align-middle"><a href="#" class="btn btn-tag">United States</a><a href="#" class="btn btn-tag">India</a>
                <a href="#" class="btn btn-tag">China</a><a href="#" class="btn btn-tag">Africa</a>
              </td>
              <td class="v-align-middle">
                <p>it is more then ONE nation/nationality as its fall name is The United Kingdom of Great Britain and North Ireland..</p>
              </td>
              <td class="v-align-middle">
                <p>Public</p>
              </td>
              <td class="v-align-middle">
                <p>April 13,2014 10:13</p>
              </td>
            </tr>
            <tr>
              <td class="v-align-middle semi-bold">
                <p>First Tour</p>
              </td>
              <td class="v-align-middle"><a href="#" class="btn btn-tag">United States</a><a href="#" class="btn btn-tag">India</a>
                <a href="#" class="btn btn-tag">China</a><a href="#" class="btn btn-tag">Africa</a>
              </td>
              <td class="v-align-middle">
                <p>it is more then ONE nation/nationality as its fall name is The United Kingdom of Great Britain and North Ireland..</p>
              </td>
              <td class="v-align-middle">
                <p>Public</p>
              </td>
              <td class="v-align-middle">
                <p>April 13,2014 10:13</p>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!-- END card -->
  </div>
@endsection