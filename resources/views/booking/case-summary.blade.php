@extends('templates.main')
@section('content')
<div class="container">
<div class="row">
    <div class="col-md-3 left-section" style="background:ghostwhite">
      <div class="row">
        <div class="col-12 p-3" style="background:ghostwhite">
          <strong>
            <div class="card" style="background:#fff; border-radius:10px; min-height:500px">           
                <nav id="main-menu-navigation" class="navigation-main" style="color:gray">
                    <div style="color:#337ab7" class="nav-lavel p-2"><i class="fa fa-briefcase fa-2x p-2"></i> <span>Legal needs</span></div>
                    
                    <div style="line-height:2; color:#337ab7" tyle="background:#337ab7; color:#fff; border-radius:10px" class="nav-lavel p-2"><i class="fa fa-user fa-2x p-2"></i> <span>Choose a lawyer</span></div>

                    <div style="background:#337ab7; color:#fff; border-radius:10px; padding:10px" class="nav-lavel -2"><i class="fa fa-file fa-2x p-2"></i> <span>Case summary</span>
                        <p style="font-size:12px" class="p-2">Share important info with your lawyers. Concise notes work best.</p>
                    </div>
                    <div tyle="background:#337ab7; color:#fff; border-radius:10px" class="nav-lavel p-2"><i class="fa fa-check-circle fa-2x p-2"></i> <span>Confirmation</span></div>
                </nav>                 
            </div>
          </strong>  
        </div>       
      </div>
    </div>

    <div class="col-md-9 right-section p-3">
      <div style="border-radius:30px">
        <div class="col-md-10 p-3 border" style="background:ghostwhite; border-radius:20px">
          <div class="row p-4">
            <div class="col-md-3 text-center">
              <img class="border" src="{{ asset('storage/img/avatar.jpg') }}" alt="No-Image"
              style="border-radius:10%; height:85px">
            </div>
            <div class="col-md-5 d-flex align-items-center">
              <h5 class="text-center">Shenaz Mohammed</h5>
            </div>
            <div class="col-md-4 p-2 border" style="background:#fff; border-radius:10px; color:gray">
              <small><i class="fa fa-clock-o"></i> Mon Aug, 08 5:30pm</small><br>
              <small><i class="fa fa-phone"></i> (147) 595-0407</small>
            </div>
          </div>
        </div>
        
        <div class="col-md-12 mb-3 mt-3">
            <label for="last-name">Add your notes<span class="text-danger">*</span></label>
            <textarea name="case_note" placeholder="Add your case notes/summary..." type="text" 
            row="" class="form-control @error('case_note') is-invalid @enderror" value=""></textarea>
            @error('case_note')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
            @enderror 
        </div>
        <div class="col-lg-5 mb-3">
            <!-- <label for="last-name">Last name <span class="text-danger">*</span></label> -->
            <input name="case_file" placeholder="Case File" type="file" 
            class="form-control @error('case_note') is-invalid @enderror"
            value="">
            @error('case_file')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
            @enderror 
        </div>
        
        <div class="example mt-3 p-4 border" style="background:ghostwhite; border-radius:20px; color:gray">
          <h5 style="color:#337ab7"><i class="fa fa-question-circle"></i> Example</h5>
          <p class="mt-0">
            <small>
              My business partner and I have spent the last six months developing a computer program that helps
              restaurant managers manage their inventory. We want to commercialize this program, 
              but we are unsure about some few things. 
              <ol>
                <li>How do we protect our intellectual property from our competitors?</li>
                <li>Do we need to register a patent or a copyright?</li>
                <li>What happens if our relationship falls apart?</li> 
                <li>Who would own the program in case of a split?</li> 
                <li>How would the revenue be split if we split?</li>
              </ol>
            </small>
          </p>
        </div>

        <div class="mt-3 d-grid gap-1 d-md-flex justify-content-md-end">
          <a href="#" 
          class="btn" style="background:gray; color:#fff">
          <i class="fa fa-chevron-left"></i> Back</a>

          <a href="{{ route('booking.confirmation') }}"
          class="btn" style="background:#337ab7; color:#fff">
            Next <i class="fa fa-chevron-right"></i></a>
        </div>

      </div>    
    </div>
  </div>
</div>
@endsection