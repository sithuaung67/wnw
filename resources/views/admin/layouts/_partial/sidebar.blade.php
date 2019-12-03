<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->

    <a href="" class="brand-link">
      <img src="{{asset('image/Logo.png')}}" alt=" " class="brand-image img-circle" style="opacity: .8">
      <span class="brand-text font-weight-light">Monitoring System</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">

          <img src="{{asset('image/user2-160x160.jpg')}}" class="img-circle" alt="User Image">

        </div>
        <div class="info">
          <a href="#" class="d-block">Admin<i class="fa fa-circle text-success btn-sm"></i> <span style="font-size: 15px;">Online</span></a>

        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         
          <li class="nav-item has-treeview menu-open">
            <a href="{{route('dashboard')}}" class="nav-link active">
              <i class="fa fa-tachometer" aria-hidden="true"></i>
              <p>
                Dashboard
                
              </p>
            </a>
          
          </li>

          <!-- Start MCIL -->
          {{-- <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fa fa-list-alt" aria-hidden="true"></i>
              <p>
                MCIL
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="fa fa-bars" aria-hidden="true"></i>
                  <p>
                     Sector
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                      <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                      <p>
                        categories
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{route('get.McilSectorCategoryIndex')}}" class="nav-link">
                          <i class="fa fa-eye" aria-hidden="true"></i>
                          <p>View</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{route('get.McilSectorCategoryCreate')}}" class="nav-link">
                          <i class="fa fa-plus-circle" aria-hidden="true"></i>
                          <p>Create</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                      <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                      <p>
                        investments
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{route('get.McilSectorInvestmentIndex')}}" class="nav-link">
                          <i class="fa fa-eye" aria-hidden="true"></i>
                          <p>View</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{route('get.McilSectorInvestmentCreate')}}" class="nav-link">
                          <i class="fa fa-plus-circle" aria-hidden="true"></i>
                          <p>Create</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="fa fa-bars" aria-hidden="true"></i>
                  <p>
                     Region
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                      <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                      <p>
                        categories
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{route('get.McilRegionCategoryIndex')}}" class="nav-link">
                          <i class="fa fa-eye" aria-hidden="true"></i>
                          <p>View</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{route('get.McilRegionCategoryCreate')}}" class="nav-link">
                          <i class="fa fa-plus-circle" aria-hidden="true"></i>
                          <p>Create</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                      <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                      <p>
                        investments
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{route('get.McilRegionInvestmentIndex')}}" class="nav-link">
                          <i class="fa fa-eye" aria-hidden="true"></i>
                          <p>View</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{route('get.McilRegionInvestmentCreate')}}" class="nav-link">
                          <i class="fa fa-plus-circle" aria-hidden="true"></i>
                          <p>Create</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          
 --}}

        <!-- Start FIL -->
          {{-- <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fa fa-id-card-o" aria-hidden="true"></i>
              <p>
                FIL
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="fa fa-bars" aria-hidden="true"></i>
                  <p>
                     Sector
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                      <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                      <p>
                        categories
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{route('get.FilSectorCategoryIndex')}}" class="nav-link">
                          <i class="fa fa-eye" aria-hidden="true"></i>
                          <p>View</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{route('get.FilSectorCategoryCreate')}}" class="nav-link">
                         <i class="fa fa-plus-circle" aria-hidden="true"></i>
                          <p>Create</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                      <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                      <p>
                        investments
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{route('get.FilSectorInvestmentIndex')}}" class="nav-link">
                          <i class="fa fa-eye" aria-hidden="true"></i>
                          <p>View</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{route('get.FilSectorInvestmentCreate')}}" class="nav-link">
                          <i class="fa fa-plus-circle" aria-hidden="true"></i>
                          <p>Create</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="fa fa-bars" aria-hidden="true"></i>
                  <p>
                     Region
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                      <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                      <p>
                        categories
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{route('get.FilRegionCategoryIndex')}}" class="nav-link">
                          <i class="fa fa-eye" aria-hidden="true"></i>
                          <p>View</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{route('get.FilRegionCategoryCreate')}}" class="nav-link">
                          <i class="fa fa-plus-circle" aria-hidden="true"></i>
                          <p>Create</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                      <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                      <p>
                        investments
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{route('get.FilRegionInvestmentIndex')}}" class="nav-link">
                          <i class="fa fa-eye" aria-hidden="true"></i>
                          <p>View</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{route('get.FilRegionInvestmentCreate')}}" class="nav-link">
                          <i class="fa fa-plus-circle" aria-hidden="true"></i>
                          <p>Create</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                 <i class="fa fa-bars" aria-hidden="true"></i>
                  <p>
                     Country
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                      <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                      <p>
                        categories
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{route('get.FilCountryCategoryIndex')}}" class="nav-link">
                          <i class="fa fa-eye" aria-hidden="true"></i>
                          <p>View</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{route('get.FilCountryCategoryCreate')}}" class="nav-link">
                          <i class="fa fa-plus-circle" aria-hidden="true"></i>
                          <p>Create</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                      <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                      <p>
                        investments
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{route('get.FilCountryInvestmentIndex')}}" class="nav-link">
                          <i class="fa fa-eye" aria-hidden="true"></i>
                          <p>View</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{route('get.FilCountryInvestmentCreate')}}" class="nav-link">
                          <i class="fa fa-plus-circle" aria-hidden="true"></i>
                          <p>Create</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
          </li> --}}
          
            <!-- Star SEZ -->
          {{-- <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fa fa-university" aria-hidden="true"></i>
              <p>
                SEZ
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            
            <ul class="nav nav-treeview">

              <!--  Sez Zone -->
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="fa fa-bars" aria-hidden="true"></i>

                  <p>
                    Zone
                    <i class="fas fa-angle-left right"></i>
                    
                  </p>
                </a>
                  <ul class="nav nav-treeview">

                    <!--  Sez Zone Categories-->
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                          <i class="fa fa-pencil-square-o" aria-hidden="true"></i>

                          <p>
                            categories
                            <i class="fas fa-angle-left right"></i>
                            
                          </p>
                        </a>
                        <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="{{route('sez-zone-categories.index')}}" class="nav-link">
                            <i class="fa fa-eye" aria-hidden="true"></i>

                              <p>index</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="{{route('sez-zone-categories.create')}}" class="nav-link">
                              <i class="fa fa-plus-circle" aria-hidden="true"></i>

                              <p>create</p>
                            </a>
                          </li>             
                        </ul>
                      </li>

                          <!--  Sez Zone Investment-->
                      <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                           <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            <p>
                              investments
                              <i class="fas fa-angle-left right"></i>
                              
                            </p>
                          </a>
                          <ul class="nav nav-treeview">
                            <li class="nav-item">
                              <a href="{{route('sez-zone-investment.index')}}" class="nav-link">
                              <i class="fa fa-eye" aria-hidden="true"></i>

                                <p>index</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="{{route('sez-zone-investment.create')}}" class="nav-link">
                                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                <p>create</p>
                              </a>
                            </li>             
                          </ul>
                      </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="fa fa-bars" aria-hidden="true"></i>
                  <p>
                    Sector
                    <i class="fas fa-angle-left right"></i>
                    
                  </p>
                </a>
                  <ul class="nav nav-treeview">

                    <!--  Sez Sector Categories-->
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                          <i class="fa fa-pencil-square-o" aria-hidden="true"></i>

                          <p>
                            categories
                            <i class="fas fa-angle-left right"></i>
                            
                          </p>
                        </a>
                        <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="{{route('sez-sector-categories.index')}}" class="nav-link">
                            <i class="fa fa-eye" aria-hidden="true"></i>

                              <p>index</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="{{route('sez-sector-categories.create')}}" class="nav-link">
                              <i class="fa fa-plus-circle" aria-hidden="true"></i>
                              <p>create</p>
                            </a>
                          </li>             
                        </ul>
                      </li>

                          <!--  Sez Sector Investment-->
                      <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                           <i class="fa fa-pencil-square-o" aria-hidden="true"></i>

                            <p>
                              investments
                              <i class="fas fa-angle-left right"></i>
                              
                            </p>
                          </a>
                          <ul class="nav nav-treeview">
                            <li class="nav-item">
                              <a href="{{route('sez-sector-investment.index')}}" class="nav-link">
                              <i class="fa fa-eye" aria-hidden="true"></i>

                                <p>index</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="{{route('sez-sector-investment.create')}}" class="nav-link">
                                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                <p>create</p>
                              </a>
                            </li>             
                          </ul>
                      </li>
                    </ul>
                </li>
                    <!-- Country -->
                <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="fa fa-bars" aria-hidden="true"></i>

                  <p>
                    Country
                    <i class="fas fa-angle-left right"></i>
                    
                  </p>
                </a>
                  <ul class="nav nav-treeview">

                    <!--  Sez Country Categories-->
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                         <i class="fa fa-pencil-square-o" aria-hidden="true"></i>

                          <p>
                            categories
                            <i class="fas fa-angle-left right"></i>
                            
                          </p>
                        </a>
                        <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="{{route('sez-country-categories.index')}}" class="nav-link">
                            <i class="fa fa-eye" aria-hidden="true"></i>

                              <p>index</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="{{route('sez-country-categories.create')}}" class="nav-link">
                              <i class="fa fa-plus-circle" aria-hidden="true"></i>
                              <p>create</p>
                            </a>
                          </li>             
                        </ul>
                      </li>

                          <!--  Sez Country Investment-->
                      <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>

                            <p>
                              investments
                              <i class="fas fa-angle-left right"></i>
                              
                            </p>
                          </a>
                          <ul class="nav nav-treeview">
                            <li class="nav-item">
                              <a href="{{route('sez-country-investment.index')}}" class="nav-link">
                              <i class="fa fa-eye" aria-hidden="true"></i>

                                <p>index</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="{{route('sez-country-investment.create')}}" class="nav-link">
                                <i class="fa fa-plus-circle" aria-hidden="true"></i>

                                <p>create</p>
                              </a>
                            </li>             
                          </ul>
                      </li>
                    </ul>
                </li>
            </ul>
          </li> --}}
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fa fa-university" aria-hidden="true"></i>
              <p>
                Data Import
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            
            <ul class="nav nav-treeview">

              <!--  Sez Zone -->
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="fa fa-pencil-square-o" aria-hidden="true"></i>

                  <p>
                    Main Category
                    <i class="fas fa-angle-left right"></i>
                    
                  </p>
                </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{route('main-categories.index')}}" class="nav-link">
                            <i class="fa fa-eye" aria-hidden="true"></i>

                              <p>index</p>
                            </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{route('main-categories.create')}}" class="nav-link">
                            <i class="fa fa-plus-circle" aria-hidden="true"></i>

                              <p>create</p>
                        </a>
                      </li>             
                    </ul>
              </li>                  
            </ul>
            <ul class="nav nav-treeview">

              <!--  Sez Zone -->
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="fa fa-pencil-square-o" aria-hidden="true"></i>

                  <p>
                    Sub Category
                    <i class="fas fa-angle-left right"></i>
                    
                  </p>
                </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{route('sub-categories.index')}}" class="nav-link">
                            <i class="fa fa-eye" aria-hidden="true"></i>

                              <p>index</p>
                            </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{route('sub-categories.create')}}" class="nav-link">
                            <i class="fa fa-plus-circle" aria-hidden="true"></i>

                              <p>create</p>
                        </a>
                      </li>             
                    </ul>
              </li>                  
            </ul>
            <ul class="nav nav-treeview">

              <!--  Sez Zone -->
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="fa fa-pencil-square-o" aria-hidden="true"></i>

                  <p>
                    Sub Data Category
                    <i class="fas fa-angle-left right"></i>
                    
                  </p>
                </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{route('sub-data-categories.index')}}" class="nav-link">
                            <i class="fa fa-eye" aria-hidden="true"></i>

                              <p>index</p>
                            </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{route('sub-data-categories.create')}}" class="nav-link">
                            <i class="fa fa-plus-circle" aria-hidden="true"></i>

                              <p>create</p>
                        </a>
                      </li>             
                    </ul>
              </li>                  
            </ul>
            <ul class="nav nav-treeview">

              <!--  Sez Zone -->
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="fa fa-pencil-square-o" aria-hidden="true"></i>

                  <p>
                    Investment
                    <i class="fas fa-angle-left right"></i>
                    
                  </p>
                </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{route('investments.index')}}" class="nav-link">
                            <i class="fa fa-eye" aria-hidden="true"></i>

                              <p>index</p>
                            </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{route('investments.create')}}" class="nav-link">
                            <i class="fa fa-plus-circle" aria-hidden="true"></i>

                              <p>create</p>
                        </a>
                      </li>             
                    </ul>
              </li>                  
            </ul>
          </li>
               
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fa fa-pie-chart" aria-hidden="true"></i>
              <p>
                Charts
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('charts')}}" class="nav-link">
                  <i class="fa fa-bar-chart" aria-hidden="true"></i>
                  <p>ChartJS</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fa fa-cog" aria-hidden="true"></i>
              <p>
                Setting
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fa fa-sign-out" aria-hidden="true"></i>
                  <p>Logout</p>
                </a>
              </li>
              
            </ul>
          </li>
         
        </ul>
      </nav>
    </div>
  </aside>