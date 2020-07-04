@extends('layouts.layouttest')

@section('title', 'Detail Ticket')



@section('content')

<section id="detail-container" style="margin-top: 120px; margin-bottom: 100px;">
  <div class="page-container">
        <div class="card user-activity-card">
            <div class="card-block product-list" id="load-data" >
                <div class="post row m-b-25">

                  <div class="col wrap-input100 input100-select" style="max-width: 440px; border: 1px solid transparent;">
                    <div class="col-auto p-r-0">

                  <div class="ticket-place" style="width: 100px;">
                    <div class="ticket-header">
                          Event Details
                        </div>
                    <div class="box-category">
                      <div class="ticketPlace">
                        <table id="ticketcheckout" class="table table-responsive table-hover">
                          <tbody style="display:block; overflow:auto;">
                            <tr class="ticketcat">
                              <td>
                                <div class="u-img"> <img class="myImages img-radius cover-img" id="myImg" src="{{ asset('assets/img/poster1.jpeg') }}" alt="event poster" width="300" height="200"></div>
                                <div id="myModal" class="modal">
                                <!-- The Close Button -->
                                <span class="close">&times;</span>
                                <!-- Modal Content (The Image) -->
                                <img class="modal-content" id="img01">
                                <!-- Modal Caption (Image Text) -->
                                <div id="caption"></div>
                                </div>
                              </td>
                              <td>
                              </td>
                            </tr>

                            <tr class="ticketcat">
                                <td style="margin-top: -120px; height: 80px;">
                                  <p class="wu-title" style="font-weight: 800; font-size: 20px;">Java Open Air 2020</p>
                                </td>
                                </tr>
                                <tr class="ticketcat">
                                  <td style="margin-top: -60px; margin-bottom: -80px;">
                                    <p><i class="fa fa-calendar" aria-hidden="true" style="margin-right: 16px;"></i>
                                      <span class="wu-text">March 25, 2020</span>
                                    </p>

                                    <p><i class="fa fa-map-marker" aria-hidden="true" style="margin-right: 24px;"></i>
                                      <span class="wu-text">Jogja Expo Center</span>
                                    </p>
                                  </td>
                                </tr>
                              </tbody>

                              <tfoot>
                              </tfoot>
                            </table>
                          </div>
                        </div>
                      </div>

                    </div>

                  </div>

                  <div class="col wrap-input100 input100-select" style="border: 1px solid transparent;">
                    <div class="col-auto p-r-0">

                  <div class="ticket-place">
                    <div class="ticket-header">
                          You have (berapa) tickets.
                        </div>
                    <div class="box-category">
                      <div class="ticketPlace">
                        <table id="ticketcheckout" class="table table-responsive table-hover">
                          <tbody style="display:block; overflow:auto;">
                            <tr class="ticketcat">
                              <td>
                                <div class="u-img"> <img class="myImages img-radius cover-img" id="myImg" src="{{ asset('assets/img/poster1.jpeg') }}" alt="event poster" width="300" height="200"></div>
                                <div id="myModal" class="modal">
                                <!-- The Close Button -->
                                <span class="close">&times;</span>
                                <!-- Modal Content (The Image) -->
                                <img class="modal-content" id="img01">
                                <!-- Modal Caption (Image Text) -->
                                <div id="caption"></div>
                                </div>
                              </td>
                              <td>
                                Booking ID<br>
                                <strong style="font-size: 14px; color:#929292;">#666</strong>
                              </td>
                              <td>
                                Name<br>
                                <strong style="font-size: 14px; color:#929292;">Agus Garpit</strong>
                              </td>
                              <td>
                                Category<br>
                                <strong style="font-size: 14px; color:#929292;">Presale 2</strong>
                              </td>
                              <td>
                                Status<br>
                                <strong style="font-size: 14px; color:#008716;">Check in 1 time</strong>
                              </td>
                              <td style="margin-bottom: -90px;">
                                <a class="wu-btn align-middle" style="text-align: center; height: 67px; width: 166px;" href="">Download Ticket</a>
                              </td>
                            </tr>

                            <tr class="ticketcat">
                              <td>
                                <div class="u-img"> <img class="myImages img-radius cover-img" id="myImg" src="{{ asset('assets/img/poster1.jpeg') }}" alt="event poster" width="300" height="200"></div>
                                <div id="myModal" class="modal">
                                <!-- The Close Button -->
                                <span class="close">&times;</span>
                                <!-- Modal Content (The Image) -->
                                <img class="modal-content" id="img01">
                                <!-- Modal Caption (Image Text) -->
                                <div id="caption"></div>
                                </div>
                              </td>
                              <td>
                                Booking ID<br>
                                <strong style="font-size: 14px; color:#929292;">#666</strong>
                              </td>
                              <td>
                                Name<br>
                                <strong style="font-size: 14px; color:#929292;">Agus Garpit</strong>
                              </td>
                              <td>
                                Category<br>
                                <strong style="font-size: 14px; color:#929292;">Presale 2</strong>
                              </td>
                              <td>
                                Status<br>
                                <strong style="font-size: 14px; color:#008716;">Check in 1 time</strong>
                              </td>
                              <td>
                                <a class="wu-btn align-middle" style="text-align: center; height: 67px; width: 166px;" href="">Download Ticket</a>
                              </td>
                            </tr>
                          </tbody>

                              <tfoot>
                              </tfoot>
                            </table>
                          </div>
                        </div>
                      </div>

                    </div>

                  </div>


                </div>


            </div>

        </div>
  </div>
</section>

@endsection
