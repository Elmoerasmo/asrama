<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="assets/css/room.css" type="text/css" rel="stylesheet">
    <title>Isi Formulir</title>

</head>
<body>
    @include('partials.navbar')
    <div id="form" class="form">
          <div class="form-title" >
            <h2>ISI FORMULIR</h2>
          </div>
          <div class="container">
            {{-- <form action="{{route('beds.store')}}" id="form"  class="php-email-form">
              </form> --}}
              <div class="php-email-form">
                  {{-- <div class="form-group">
                    <label for="name" class="col-md-6">Nama Lengkap</label>
                    <input type="text" name="name" class="form-control" id="name" required>
                  </div>
                  <div class="form-group">
                    <label for="alamat" class="col-md-6">Alamat</label>
                    <input type="text" name="name" class="form-control" id="alamat" required>
                  </div>
                  <div class="form-group">
                    <label for="name">No. Telepon</label>
                    <input type="text" class="form-control" name="phone" id="phone" required>
                  </div> --}}
                <label align-text="center">Pilih Kamar</label>
              
              <div class="room-box  ">
                <ul class="showcase">
                  <li>
                    <div class="note"></div>
                    <br>
                    <small>Available</small>
                  </li>
                  <li>
                    <div class="note selected"></div>
                    <small>Selected</small>
                  </li>
                  <li>
                    <div class="note booked"></div>
                    <small>Booked</small>
                  </li>
                </ul>

                <div class="room-group">
                  
                  <div class="room-row">
                      <div class="room">
                        <div class="bed" data-bed-id="1">atas</div>
                        <div class="bed" data-bed-id="2">atas</div>
                        <div class="bed" data-bed-id="3">bawah</div>
                        <div class="bed" data-bed-id="4">bawah</div>
                        <p>201</p>
                    </div>
                    <div class="room">
                        <div class="bed" data-bed-id="5">atas</div>
                        <div class="bed" data-bed-id="6">atas</div>
                        <div class="bed" data-bed-id="7">bawah</div>
                        <div class="bed" data-bed-id="8">bawah</div>
                        <p>202</p>
                    </div>
                    <div class="room">
                        <div class="bed" data-bed-id="9">atas</div>
                        <div class="bed" data-bed-id="10">atas</div>
                        <div class="bed" data-bed-id="11">bawah</div>
                        <div class="bed" data-bed-id="12">bawah</div>
                        <p>203</p>
                    </div>
                    <div class="room">
                        <div class="bed" data-bed-id="13">atas</div>
                        <div class="bed" data-bed-id="14">atas</div>
                        <div class="bed" data-bed-id="15">bawah</div>
                        <div class="bed" data-bed-id="16">bawah</div>
                        <p>204</p>
                    </div>
                  </div>
                  <div class="room-row">
                    <div class="room">
                      <div class="bed" data-bed-id="17">atas</div>
                      <div class="bed" data-bed-id="18">atas</div>
                      <div class="bed" data-bed-id="19">bawah</div>
                      <div class="bed" data-bed-id="20">bawah</div>
                      <p>101</p>
                    </div>
                    <div class="room">
                      <div class="bed" data-bed-id="21">atas</div>
                      <div class="bed" data-bed-id="22">atas</div>
                      <div class="bed" data-bed-id="23">bawah</div>
                      <div class="bed" data-bed-id="24">bawah</div>
                      <p>102</p>
                    </div>
                    <div class="room">
                      <div class="bed" data-bed-id="25">atas</div>
                      <div class="bed" data-bed-id="26">atas</div>
                      <div class="bed" data-bed-id="27">bawah</div>
                      <div class="bed" data-bed-id="28">bawah</div>
                      <p>103</p>
                    </div>
                    <div class="room">
                      <div class="bed" data-bed-id="29">atas</div>
                      <div class="bed" data-bed-id="30">atas</div>
                      <div class="bed" data-bed-id="31">bawah</div>
                      <div class="bed" data-bed-id="32">bawah</div>
                      <p>104</p>
                    </div>
                  </div>
                  <div class="room-row">
                    <div class="room">
                      <div class="bed" data-bed-id="33">bawah</div>
                      <div class="bed" data-bed-id="34">bawah</div>
                      <div class="bed" data-bed-id="35">atas</div>
                      <div class="bed" data-bed-id="36">atas</div>
                      <p>105</p>
                    </div>
                    <div class="room">
                      <div class="bed" data-bed-id="37">bawah</div>
                      <div class="bed" data-bed-id="38">bawah</div>
                      <div class="bed" data-bed-id="39">atas</div>
                      <div class="bed" data-bed-id="40">atas</div>
                      <p>106</p>
                    </div>
                    <div class="room">
                      <div class="bed" data-bed-id="41">bawah</div>
                      <div class="bed" data-bed-id="42">bawah</div>
                      <div class="bed" data-bed-id="43">atas</div>
                      <div class="bed" data-bed-id="44">atas</div>
                      <p>107</p>
                    </div>
                    <div class="room">
                      <div class="bed" data-bed-id="45">bawah</div>
                      <div class="bed" data-bed-id="46">bawah</div>
                      <div class="bed" data-bed-id="47">atas</div>
                      <div class="bed" data-bed-id="48">atas</div>
                      <p>108</p>
                    </div>
                  </div>
                  <div class="room-row">
                      <div class="room">
                        <div class="bed" data-bed-id="49">bawah</div>
                        <div class="bed" data-bed-id="50">bawah</div>
                        <div class="bed" data-bed-id="51">atas</div>
                        <div class="bed" data-bed-id="52">atas</div>
                        <p>205</p>
                    </div>
                    <div class="room">
                        <div class="bed" data-bed-id="53">bawah</div>
                        <div class="bed" data-bed-id="54">bawah</div>
                        <div class="bed" data-bed-id="55">atas</div>
                        <div class="bed" data-bed-id="56">atas</div>
                        <p>206</p>
                    </div>
                    <div class="room">
                       <div class="bed" data-bed-id="57">bawah</div>
                        <div class="bed" data-bed-id="58">bawah</div>
                        <div class="bed" data-bed-id="59">atas</div>
                        <div class="bed" data-bed-id="60">atas</div>
                        <p>207</p>
                    </div>
                    <div class="room">
                        <div class="bed" data-bed-id="61">bawah</div>
                        <div class="bed" data-bed-id="62">bawah</div>
                        <div class="bed" data-bed-id="63">atas</div>
                        <div class="bed" data-bed-id="64">atas</div>
                        <p>208</p>
                    </div>
                  </div>
                </div> 
              </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                <div class="text-center"><button type="submit" id="submitBtn">Send Message</button></div>
                  
                  <form id="bedForm" method="POST" action="{{ route('beds.store') }}">
                    @csrf
                    <input type="hidden" name="selected_beds[]" value="">
                    
                  </form>
                </div>
          </div>
        </div>
    </div><!-- End Contact Section -->
    <script src="assets/js/roomselect.js"></script>
</body>
</html>