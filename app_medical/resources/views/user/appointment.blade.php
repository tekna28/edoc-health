<div class="page-section">
    <div class="container">
    <h1 class="text-center wow fadeInUp" style="color: #53BDA5;"><b><font size="+4"><u>Book an appointment</u></font></b></h1>

      <form class="main-form" action="{{url('appointment')}}" method="POST">

        @csrf

        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
          <label><b>Surname:</b></label><br>
            <input type="text" name="surname" class="form-control" placeholder="Surname">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
          <label><b>First Name:</b></label><br>
            <input type="text" name="name" class="form-control" placeholder="First Name">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
          <label><b>Email:</b></label><br>
            <input type="text" name="email" class="form-control" placeholder="Email">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
          <label><b>Date of Birth:</b></label><br>
            <input type="date" name="date_birth" class="form-control" placeholder="Date of Birth">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
          <label><b>Date of Appointment:</b></label><br>
            <input type="date" name="date_rdv" class="form-control" placeholder="Date of Appointment">
          </div>

          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
          <label><b>Select a doctor:</b></label><br>
            <select name="doctor" id="departement" class="custom-select">
              <option>---select a doctor---</option>

              @foreach($doctor as $doctors)

              <option value="{{$doctors->surname}} {{$doctors->name}} {{$doctors->description}}">{{$doctors->surname}} {{$doctors->name}} {{$doctors->description}}</option>

              @endforeach
            </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
          <label><b>Phone number:</b></label><br>
            <input type="text" name="phone" class="form-control" placeholder="Phone number">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
          <label><b>Message:</b></label><br>
            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter your message..."></textarea>
          </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit your request</button>
      </form>
    </div>
  </div> <!-- .page-section -->