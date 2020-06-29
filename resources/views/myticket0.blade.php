@extends('layouts.layoutticket')

@section('title', 'Ticket')



@section('content')

<div id="konten" class="container">

  <div id="headerBox">
  	<div class="container">
        <h1 class="wu-title">Java Open Air 2020</h1>

        <div class="row">
          <p class="wu-title">Created by:
            <span class="wu-text">EO Name</span>
          </p>
          <p class="wu-title" style="margin-left: 50px;">Status:
            <span class="wu-text">Reschedule</span>
          </p>
        </div>

          <div class="columns right-col float-right">
            <div class="detail-de">

            <div class="row-de">
              <div class="info-de">
                <p><i class="fa fa-calendar" aria-hidden="true" style="margin-right: 16px;"></i>
                  <span class="wu-text"> April 27, 2020 | 11:00:00 </span>
                </p>
              </div>

            <div class="row-de">
              <div class="info-de">
                <p><i class="fa fa-map-marker" aria-hidden="true" style="margin-right: 16px;"></i>
                  <span class="wu-text"> Jogja Expo Center </span>
                </p>
              </div>
            </div>

              <div class="info-de">
                <p><i class="fa fa-globe" aria-hidden="true" style="margin-right: 16px;"></i>
                  <span><a href="https://www.google.com/maps?q=Jogja Expo Center" class="wu-title">View in Maps</a></span>
                </p>
              </div>
            </div>



            </div>
          </div>

      </div>
  	</div>

  <section id="carousel">
    <div class="container wow fadeIn">
      <div class="row">
        <div class="col-lg-9 text-center text-lg-left">
          <h3 class="wu-title">Tickets</h3>
        </div>
        <div class="col-lg-3 wu-btn-container text-center">
          <div class="searchbar">
                <input class="search_input" type="text" name="" placeholder="Search...">
                <a href="#" class="search_icon"><i class="fa fa-search yoman"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="detail-container">
    <div class="page-container">
          <div class="card user-activity-card">

              <div class="card-header">
                  <h5>Laporan Terbaru</h5>
              </div>

              <div class="card-block product-list" id="load-data">
                  <div class="post row m-b-25">
                      <div class="col-auto p-r-0">
                          <div class="u-img">
                            <!-- <img src="{{ asset('assets/img/default-avatar.png') }}" alt="user image" class="img-radius cover-img"> -->
                          </div>
                      </div>
                      <div class="col wrap-input100 input100-select bg1">
                          <h6 class="m-b-5">Java Open Air</h6>
                          <p class="m-b-5">#666<span class="statuslapor"> <i class="fa fa-circle m-r-10" aria-hidden="true"></i>Finished</span></p>
                          <p class="m-b-0">Description :</p>
                          <p class="m-b-5">Venue : JEC</p>
                          <div class="col-auto p-r-0">
                              <div class="u-img"> <img class="myImages img-radius cover-img" id="myImg" src="" alt="user image" width="300" height="200"></div>
                              <div id="myModal" class="modal">
                              <!-- The Close Button -->
                              <span class="close">&times;</span>
                              <!-- Modal Content (The Image) -->
                              <img class="modal-content" id="img01">
                              <!-- Modal Caption (Image Text) -->
                              <div id="caption"></div>
                              </div>
                        </div>
                          <p class="date text-muted m-b-0"><i class="fa fa-clock-o m-r-10"></i>Date</p>
                      </div>
                  </div>
              </div>

              <div id="remove-row" class="text-center">
                <p id="btn-more" class="btn-get-started text-center" style="cursor:pointer" data-id="">Load more ticket</p>
              </div>
          </div>
    </div>
  </section>

</div>

@endsection
