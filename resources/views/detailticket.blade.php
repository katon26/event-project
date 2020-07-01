@extends('layouts.layoutticket')

@section('title', 'Detail Ticket')



@section('content')

<section id="carousel">
  <div class="container">

    <div id="ticketbuy" class="ticket-column padside-12">
      <div class="ticket-place">
        <div class="ticket-header">
          Ticket Category
        </div>

        <div class="box-category">
          <div class="ticketPlace">

    <table id="ticketcheckout" class="table table-responsive table-hover">
        <tfoot>
            <tr><td colspan="2"></td>
                <td>
                  <div class="checkOutBox">
                    <div class="priceTotal">
                      <p>GrandTotal</p>
                      <p id="total" class="total">Rp0</p>
                    </div>
                    <div id="buy-btn" class="checkOutButton">
                      <a class="wu-btn" href="/detailevent" style="cursor: default;">Checkout</a>
                    </div>
                  </div>
                </td>
            </tr>
        </tfoot>

        <tbody>
            <tr>
              <td>
                Presale 1</br>
                <strong style="font-size: 14px; color:#929292;">Rp&nbsp;<input type="text" class="price" value="175000" disabled="true"></strong>
              </td>
                <td>
                    <select value="" name="qty" class="qty form-control">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                </td>
                <td>
                    <strong style="font-size: 14px; color:#929292;">Rp&nbsp;<input type="text" class="price" value="175000" disabled="true"></strong>
                </td>
                <td align="center">
                    <h4><span id="amount" class="amount">Rp. 0</span></h4>
                </td>
            </tr>


            <tr><td>Presale 2</td>
                <td>
                    <select value="" name="qty" class="qty form-control">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                </td>
                <td>
                    <strong style="font-size: 14px; color:#929292;">Rp&nbsp;<input type="text" value="300000" class="price" disabled="true"></strong>
                </td>
                <td align="center">
                    <h4><span id="amount" class="amount">Rp. 0</span></h4>
                </td>
            </tr>
        </tbody>

        </table>
      </div>
    </div>

    </div>
  </div>

  </div>
</section>

@endsection
