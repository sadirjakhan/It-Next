<x-layouts.main>
    <x-slot:title>
   Post yaratish
    </x-slot:title>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contant_form">
      <h4>GET IN TOUCH</h4>
      {{-- <p>Our goal is to provide the best customer service and to answer all of your questions in a timely manner.</p> --}}
      <div class="form_section">
        <form action="{{route('posts.store')}}" method="POST">
          @csrf
          <fieldset>
          <div class=" container row">
            <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <input class="field_custom" name="title" placeholder="Sarlavha" type="text" required />
            </div>
            <div class="field col-lg-6 col-md-3 col-sm-12 col-xs-12">
              <input class="field_custom" name="short_content" placeholder="Email" type="email" required />
            </div>
            
            <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <textarea class="field_custom" name="content" placeholder="Maqola" required ></textarea>
            </div>
            <div class=" mb-4 center"><a class="btn main_bt" href="#">SUBMIT NOW</a></div>
          </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>
</x-layouts.main>