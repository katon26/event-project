@extends('layouts.layoutticket')

@section('title', 'Detail Event')



@section('content')

<div id="konten" class="container">

  <section id="detailevent">
    <div class="container">
      <h1 class="wu-title">Java Open Air 2020</h1>

      <div class="row-de">
        <p class="wu-text">Created by : EO Name</p>
        <p class="wu-text">Status : Reschedule</p>
      </div>

      <div class="row-de">
      <!-- <div class="col-lg-3 wu-btn-container text-right"> -->
              <p><i class="fa fa-calendar" aria-hidden="true" style="margin-right: 16px;"></i>
                <span class="wu-text"> March 25, 2020</span>
              </p>

              <p><i class="fa fa-map-marker" aria-hidden="true" style="margin-right: 16px;"></i>
                <span class="wu-text"> Jogja Expo Center </span>
              </p>

              <p><i class="fa fa-globe" aria-hidden="true" style="margin-right: 16px;"></i>
                <span><a href="https://www.google.com/maps?q=Jogja Expo Center" class="wu-text">View in Maps</a></span>
              </p>
      <!-- </div> -->
      </div>

      <div id="ticketbuy" class="ticket-column padside-12">
	<div class="ticket-place">
		<div class="ticket-header">
          Ticket Category
        </div>
		<div class="box-category">
			<div class="ticketPlace">
				<table id="ticketcheckout" class="table table-responsive table-hover">
					<tfoot>
						<tr>
							<td class="checkOutBox">
									<div class="priceTotal">
										<p>GrandTotal</p>
										<p id="total" class="total">Rp0</p>
									</div>
									<div id="buy-btn" class="checkOutButton">
										<a class="wu-btn" href="/detailevent" style="cursor: default;">Checkout</a>
									</div>
							</td>
						</tr>
					</tfoot>
					<tbody>
						<tr class="ticketcat">
							<td>
                Presale 1<br>
                <strong style="font-size: 14px; color:#929292;">Rp&nbsp;<input type="text" class="price" value="175000" disabled="true"></strong>
                <br>
                <strong style="font-size: 14px; color:#929292;">Total : Rp&nbsp;<span id="amount" class="amount">Rp. 0</span></strong>
              </td>
							<td>
								<select value="" name="qty" class="qty form-control">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
								</select>
							</td>
							</tr>
							<tr class="ticketcat">
								<td>
                  Presale 2</br>
                  <strong style="font-size: 14px; color:#929292;">Rp&nbsp;<input type="text" value="300000" class="price" disabled="true"></strong>
                  <br>
                  <strong style="font-size: 14px; color:#929292;">Total : Rp&nbsp;<span id="amount" class="amount">Rp. 0</span></strong>  
                </td>
								<td>
									<select value="" name="qty" class="qty form-control">
										<option value="0">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
									</select>
								</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

  </section>

  <section id="detail-container">
    <div class="page-container">
          <div class="card user-activity-card">

              <div class="card-block product-list" id="load-data">
                  <div class="post row m-b-25">
                      <div class="col-auto p-r-0">
                      </div>
                      <div class="col wrap-input100 input100-select bg1">

                              <div class="u-img"> <img class="myImages img-radius cover-img" id="myImg" src="{{ asset('assets/img/poster1.jpeg') }}" alt="user image" width="300" height="200"></div>
                              <div id="myModal" class="modal">
                              <!-- The Close Button -->
                              <span class="close">&times;</span>
                              <!-- Modal Content (The Image) -->
                              <img class="modal-content" id="img01">
                              <!-- Modal Caption (Image Text) -->
                              <div id="caption"></div>
                              </div>
                        </div>
                  </div>
              </div>



                  <div class="card-header">
                      <h5>Description</h5>
                      <h6 class="m-b-5">JAVA OPEN AIR is an outdoor music festival that held annually in 2 cities within java island of Indonesia. Year 2020 will be the first year of Java Open Air, Yogyakarta and Surabaya are the cities that will host this phenomenal rock/metal music festival. At least a couple thousands of metal heads / punk rockers / hardcore music fans will crowd the pit.
                      Java Open Air name is taken from 'Java' as in island of java, one of the most populated island in Indonesia, which also known as the central of rock/metal music community in Indonesia and Java Open Air is designed to support the development of rock/metal bands Indonesia and aimed to be one of the most-anticipated festival in Asia/Australia.  Java Open Air also will promote the tourism of Indonesia, especially, the city that will host the festival every year.
                      Along with music stages, Java Open Air will have "Collabs Market" to facilitate local fashion brands and Artists to collaborate and produce special products/creations that only available at the festival.
                      Food trucks, Merch booths and games station will also to spoil the crowds at the festival's venue.
                      On this first edition, Java Open Air 2020 will be lined-up by Indonesia's best metal / hardcore / punk bands.</h6>
                  </div>

                  <div class="card-header">
                      <h5>Announced line up</h5>
                      <h6 class="m-b-5">
                      - BURGER KILL <br>
                      - SERIGALA MALAM <br>
                      - FRAUD<br>
                      - BIAS<br>
                      - RISING THE FALL<br>
                      - ZI FACTOR<br>
                      - D'ARK LEGAL SOCIETY<br>
                      - BLINGSATAN<br>
                      - SERIGALA MALAM<br>
                      - KARAT<br>
                      - DAGING<br>
                      - WOLF FEET<br>
                      <h6>
                  </div>

              </div>
          </div>
    </div>
  </section>

</div>

@endsection
