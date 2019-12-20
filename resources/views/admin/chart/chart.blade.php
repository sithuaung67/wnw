@extends('admin.layouts.chart_master')

@section('content')
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><img src="{{asset('image/Logo.png')}}" alt=""></a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('dashboard')}}">Home <span class="sr-only">(current)</span></a>
        </li>
         <li class="nav-item">
        <h3 align="center" style="margin-left: 350px;" class="chart-title">Mifer Monitoring System</h3>
        </li>
      </ul>
     
    </div>
  </nav>
   
    <section class="content-header">
      <div class="container-fluid">
        <div class="row">
          <form action="" method="GET"></form>
            <div class="col-md-2">
             <div class="form-group">
                      <label for="">Main Categories Name</label>
                <select name="main_category_id" id="main_category_id" class="form-control">

                    <option value="">Choose</option>
                    @foreach($mian_categories as $key=>$value)
                    <option value="{{$key}}">{{$value}}</option>
                      
                    @endforeach
                    
                </select>
             </div>
              
            </div>
             <div class="col-md-2">
             <div class="form-group">
                    <label for="">Sub Categories Name</label>
                <select name="sub_category_id" id="" class="form-control">

                    <option value="">Choose Categories</option>
                    
                </select>
             </div>
              
            </div>
             <div class="col-md-4">
             <div class="form-group">
                  <label for="">Sub Data Categories Name</label>

                 <select name="sub_data_category_id" id="" class="form-control">
                          <option value="">Choose Categories</option>
                  </select>
             </div>
              
            </div>
            <div class="col-md-2">
             <div class="form-group">
                  <label for="">Choose Month</label>

                <select name="" id="" class="form-control">
                    <option value="">Choose</option>
                   
                </select>
             </div>
              
            </div>
            <div class="col-md-2">
             <div class="form-group">
                  <label for="">Choose Year</label>

                <select name="" id="" class="form-control">
                    <option value="">Choose</option>
                    <option value="">Zone</option>
                   
                </select>
             </div>
              
            </div>

          
        </div>
      </div>
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
         
           

            <!-- BAR CHART -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Bar Chart</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="barChart" style="height:230px; min-height:230px"></canvas>
                </div>
              </div>
             
            </div>
          

          </div>
         
        </div>
        
      </div>
    </section>
@endsection
  
@section('script')
<script>
  
</script>
  <script>
      
   $(document).ready( function(){
    $('select[name="main_category_id"]').on('change', function(){

        var subcategory=$(this).val();
        if(subcategory){
          $.ajax({
          url: '/charts/getData/' + subcategory,
          type: "GET",
          dataType: "json",

          success: function(data) {

                        $('select[name="sub_category_id"]').empty();
                        $('select[name="sub_category_id"]').append('<option value="">Choose Sub Categories</option>');


                        $.each(data, function(key, value) {
                            $('select[name="sub_category_id"]').append('<option value="'+key+'">'+value+'</option>');
                        });
                    }, 
                });
        }
    });

    $('select[name="sub_category_id"]').on('change', function(){

        var subcategory=$(this).val();
        if(subcategory){
          $.ajax({
          url: '/charts/getSubData/' + subcategory,
          type: "GET",
          dataType: "json",

          success: function(data) {
                        $('select[name="sub_data_category_id"]').empty();
                        $('select[name="sub_data_category_id"]').append('<option value="">Choose Sub Categories</option>');


                        $.each(data, function(key, value) {
                            $('select[name="sub_data_category_id"]').append('<option value="'+key+'">'+value+'</option>');
                        });
                    }, 
                });
        }
    });
   });
 </script>

  
    <script>
  $(function () {
   var data={{$sub_data_categories}}
    var areaChartData = {
      labels  : data,
      datasets: [
        {
          label               : 'Foregin Investment',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : data,
        },
        {
          label               : 'Citizen Investment',
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [65, 59, 80, 81, 56, 55, 40]
        },
      ]
    }

    var areaChartOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: false
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : false,
          }
        }]
      }
    }

    var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChartData = jQuery.extend(true, {}, areaChartData)
    var temp0 = areaChartData.datasets[0]
    var temp1 = areaChartData.datasets[1]
    barChartData.datasets[0] = temp1
    barChartData.datasets[1] = temp0

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    var barChart = new Chart(barChartCanvas, {
      type: 'bar', 
      data: barChartData,
      options: barChartOptions
    })

    var stackedBarChartData = jQuery.extend(true, {}, barChartData)

  })
</script>
@endsection    

  





