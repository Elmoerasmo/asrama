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
          <div class="container" >
              <form action="{{route('roomBook')}}" id="form"  class="php-email-form">
                  <div class="form-group">
                    <label for="name" class="col-md-6">Nama Lengkap</label>
                    <input type="text" name="name" class="form-control" id="name" required>
                  </div>
                  <div class="form-group">
                    <label for="alamat" class="col-md-6">Alamat</label>
                    <input type="text" name="name" class="form-control" id="alamat" required>
                  </div>
                  <div class="form-group">
                    <label for="name">Your Email</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                  </div>
                <div class="form-group">
                  <label for="name">Subject</label>
                  <input type="text" class="form-control" name="subject" id="subject" required>
                </div>
                
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
                        <div class="bed">atas</div>
                        <div class="bed">atas</div>
                        <div class="bed sold">bawah</div>
                        <div class="bed sold">bawah</div>
                        <p>201</p>
                    </div>
                    <div class="room">
                        <div class="bed">atas</div>
                        <div class="bed">atas</div>
                        <div class="bed sold">bawah</div>
                        <div class="bed sold">bawah</div>
                        <p>202</p>
                    </div>
                    <div class="room">
                        <div class="bed">atas</div>
                        <div class="bed">atas</div>
                        <div class="bed sold">bawah</div>
                        <div class="bed sold">bawah</div>
                        <p>203</p>
                    </div>
                    <div class="room">
                        <div class="bed">atas</div>
                        <div class="bed">atas</div>
                        <div class="bed sold">bawah</div>
                        <div class="bed sold">bawah</div>
                        <p>204</p>
                    </div>
                  </div>
                  <div class="room-row">
                    <div class="room">
                      <div class="bed">atas</div>
                      <div class="bed">atas</div>
                      <div class="bed sold">bawah</div>
                      <div class="bed sold">bawah</div>
                      <p>101</p>
                    </div>
                    <div class="room">
                      <div class="bed">atas</div>
                      <div class="bed">atas</div>
                      <div class="bed sold">bawah</div>
                      <div class="bed sold">bawah</div>
                      <p>102</p>
                    </div>
                    <div class="room">
                      <div class="bed">atas</div>
                      <div class="bed">atas</div>
                      <div class="bed sold">bawah</div>
                      <div class="bed sold">bawah</div>
                      <p>103</p>
                    </div>
                    <div class="room">
                      <div class="bed">atas</div>
                      <div class="bed">atas</div>
                      <div class="bed sold">bawah</div>
                      <div class="bed sold">bawah</div>
                      <p>104</p>
                    </div>
                  </div>
                  <div class="room-row">
                    <div class="room">
                      <div class="bed sold">bawah</div>
                      <div class="bed sold">bawah</div>
                      <div class="bed">atas</div>
                      <div class="bed">atas</div>
                      <p>105</p>
                    </div>
                    <div class="room">
                      <div class="bed sold">bawah</div>
                      <div class="bed sold">bawah</div>
                      <div class="bed">atas</div>
                      <div class="bed">atas</div>
                      <p>106</p>
                    </div>
                    <div class="room">
                      <div class="bed sold">bawah</div>
                      <div class="bed sold">bawah</div>
                      <div class="bed">atas</div>
                      <div class="bed">atas</div>
                      <p>107</p>
                    </div>
                    <div class="room">
                      <div class="bed sold">bawah</div>
                      <div class="bed sold">bawah</div>
                      <div class="bed">atas</div>
                      <div class="bed">atas</div>
                      <p>108</p>
                    </div>
                  </div>
                  <div class="room-row">
                      <div class="room">
                        <div class="bed sold">bawah</div>
                        <div class="bed sold">bawah</div>
                        <div class="bed">atas</div>
                        <div class="bed">atas</div>
                        <p>205</p>
                    </div>
                    <div class="room">
                        <div class="bed sold">bawah</div>
                        <div class="bed sold">bawah</div>
                        <div class="bed">atas</div>
                        <div class="bed">atas</div>
                        <p>206</p>
                    </div>
                    <div class="room">
                       <div class="bed sold">bawah</div>
                        <div class="bed sold">bawah</div>
                        <div class="bed">atas</div>
                        <div class="bed">atas</div>
                        <p>207</p>
                    </div>
                    <div class="room">
                        <div class="bed">bawah</div>
                        <div class="bed sold">bawah</div>
                        <div class="bed">atas</div>
                        <div class="bed">atas</div>
                        <p>208</p>
                    </div>
                  </div>
                </div> 
              </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
                
              </form>
          </div>
    </div><!-- End Contact Section -->
    <script src="assets/js/roomselect.js"></script>
</body>
</html>