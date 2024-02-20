
    <div class="container p-2">
        <div class="row" >
            <div class="col-lg-12">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item">

     @if (App\Models\line::find($master))
     <p><a href="" class="text-white text-bold">{{App\Models\line::find($master)->name}}</a><span>/</span><a href="{{ url('lines/'.App\Models\line::find($master)->main_line) }}" class="text-white" disabled>{{ $breadcrumb }}</a></p>

     @else
     <p><a href="{{ url('lines/') }}" class="text-white text-bold">النشاطات</a></p>

     @endif
                     </div>
                </div>
            </div>
        </div>
    </div>

