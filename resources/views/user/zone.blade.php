@extends('user/blog_app') 

@section('main-content')
<div class="container">
    <div id="accordion" class="accordion">
        <div class="card mb-0 myaccordion">
            @foreach ($categories as $category)
            <div class="card-header collapsed" data-toggle="collapse" href="#collapseOne">
                <a class="card-title">
                 {{-- @foreach ($zones->categories as $zonecategory)
                  
                @endforeach> --}}
                {{ $category->name }}
                </a>
            </div>
            @endforeach
            <div id="collapseOne" class="card-body collapse" data-parent="#accordion">
                <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
                    
                        
                   
                    <thead>
                        <tr>
                            <th>Host Name</th>
                            <th>Host Number</th>
                            <th>Zonal Address</th>
                            <th>Zonal Pastor</th>
                            <th>Zonal Pastor Number</th>
                            {{-- <th>{{$zone->host_name}}</th>
                            <th>{{$zone->host_number}} </th>
                            <th>{{$zone->zonal_address}}</th>
                            <th> {{$zone->zonal_pastor}}</th>
                            <th>{{$zone->zonal_pastor_number}}</th>
                        </tr> --}}
                    </thead>
                    @foreach ($zones as $zone)  
                    <tbody>
                        <tr>
                            <td>{{$zone->host_name}}</td>
                            <td>{{$zone->host_number}}</td>
                            <td>{{$zone->zonal_address}} </td>
                            <td>{{$zone->zonal_pastor}}</td>
                            <td>{{$zone->zonal_pastor_number}}</td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
            {{-- <div class="card-header collapsed" data-toggle="collapse" href="#collapseTwo">
                <a class="card-title">
                    Zone B
                </a>
            </div>
            <div id="collapseTwo" class="card-body collapse" data-parent="#accordion">
                <table id="example1" class="table table-striped table-bordered nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>Host Name</th>
                            <th>Host Number</th>
                            <th>Zonal Address</th>
                            <th>Zonal Pastor</th>
                            <th>Zonal Pastor Number</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Elder (Mrs) Adedinsewo Bisola</td>
                            <td>08023052808</td>
                            <td>8, Akanji Ogunyemi Close, Ayegbami B/Stop Giwa </td>
                            <td>Zonal Pastor</td>
                            <td>08023052808</td>
                        </tr>
                        <tr>
                            <td>Mr & Mrs Okeugo</td>
                            <td>08023052808</td>
                            <td>36, Oka-Akoko Street, Yewande </td>
                            <td>Zonal Pastor</td>
                            <td>08023052808</td>
                        </tr>
                        <tr>
                            <td>Unknown</td>
                            <td>08023052808</td>
                            <td>8, Oluwalomola Street, Yewande </td>
                            <td>Zonal Pastor</td>
                            <td>08023052808</td>
                        </tr>
                        <tr>
                            <td>Mrs Bukola Asekere</td>
                            <td>08134326550 </td>
                            <td>20, Oduwole Street</td>
                            <td>Zonal Pastor</td>
                            <td>08025274135</td>
                        </tr>
                        <tr>
                            <td>Mrs Adebayo </td>
                            <td>081841674450</td>
                            <td>8, Oriade Close, Yewande</td>
                            <td>Zonal Pastor</td>
                            <td>08023052808 </td>
                        </tr>

                        <tr>
                            <td>Mrs Adebayo </td>
                            <td>081841674450</td>
                            <td>8, Oriade Close, Yewande</td>
                            <td>Zonal Pastor</td>
                            <td>08023052808 </td>
                        </tr>
                        <tr>
                            <td>Mrs Adebayo </td>
                            <td>081841674450</td>
                            <td>8, Oriade Close, Yewande</td>
                            <td>Zonal Pastor</td>
                            <td>08023052808 </td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <div class="card-header collapsed" data-toggle="collapse" href="#collapseThree">
                <a class="card-title">
                    Zone C
                </a>
            </div>
            <div id="collapseThree" class="card-body collapse" data-parent="#accordion">
                <table id="example2" class="table table-striped table-bordered nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>Host Name</th>
                            <th>Host Number</th>
                            <th>Zonal Address</th>
                            <th>Zonal Pastor</th>
                            <th>Zonal Pastor Number</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Elder (Mrs) Adedinsewo Bisola</td>
                            <td>08023052808</td>
                            <td>8, Akanji Ogunyemi Close, Ayegbami B/Stop Giwa </td>
                            <td>Zonal Pastor</td>
                            <td>08023052808</td>
                        </tr>
                        <tr>
                            <td>Mr & Mrs Okeugo</td>
                            <td>08023052808</td>
                            <td>36, Oka-Akoko Street, Yewande </td>
                            <td>Zonal Pastor</td>
                            <td>08023052808</td>
                        </tr>
                        <tr>
                            <td>Unknown</td>
                            <td>08023052808</td>
                            <td>8, Oluwalomola Street, Yewande </td>
                            <td>Zonal Pastor</td>
                            <td>08023052808</td>
                        </tr>
                        <tr>
                            <td>Mrs Bukola Asekere</td>
                            <td>08134326550 </td>
                            <td>20, Oduwole Street</td>
                            <td>Zonal Pastor</td>
                            <td>08025274135</td>
                        </tr>
                        <tr>
                            <td>Mrs Adebayo </td>
                            <td>081841674450</td>
                            <td>8, Oriade Close, Yewande</td>
                            <td>Zonal Pastor</td>
                            <td>08023052808 </td>
                        </tr>

                        <tr>
                            <td>Mrs Adebayo </td>
                            <td>081841674450</td>
                            <td>8, Oriade Close, Yewande</td>
                            <td>Zonal Pastor</td>
                            <td>08023052808 </td>
                        </tr>
                        <tr>
                            <td>Mrs Adebayo </td>
                            <td>081841674450</td>
                            <td>8, Oriade Close, Yewande</td>
                            <td>Zonal Pastor</td>
                            <td>08023052808 </td>
                        </tr>

                    </tbody> --}}
                </table>
            </div>


        </div>
    </div>
</div>


@endsection