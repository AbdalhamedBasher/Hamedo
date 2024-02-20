<div>

    @if (session()->has('message'))
        <div class="alert alert-success">
          {{ session('message') }}
        </div>
    @endif
    {{-- <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Phone</th>
        </tr>
        @foreach($contacts as $key => $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->phone }}</td>
            </tr>
        @endforeach
    </table> --}}
    {{-- <form> --}}
        <div class=" add-input">
            <div class="row">
                {{-- <div class="col-md-5">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter Name" wire:model="name.0">
                        @error('name.0') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <input type="phone" class="form-control" wire:model="phone.0" placeholder="Enter Phone">
                        @error('phone.0') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                </div> --}}
                <div class="col-md-2 mb-4">
                    <button class="btn text-white btn-info btn-sm" wire:click.prevent="add({{$i}})">إضافة مفردة</button><br>
                    {{-- <button class="btn text-white btn-info btn-sm" wire:click.prevent="add({{$i}})">Add</button> --}}
                </div>
            </div>
            {{-- @foreach($inputs as $index => $value)
              <div class="row">
                  <div class="col-md-5">
                      <div class="form-group">
                          <input type="text" class="form-control" placeholder="{{ $value['name'] }}" wire:model="inputs.{{ $index }}.name">
                          @error('name.0') <span class="text-danger error">{{ $message }}</span>@enderror
                      </div>
                  </div>
                  <div class="col-md-5">
                      <div class="form-group">
                          <input type="phone" class="form-control" placeholder="{{ $value['value'] }}" wire:model="inputs.{{ $index }}.value" placeholder="Enter Phone">
                          @error('phone.0') <span class="text-danger error">{{ $message }}</span>@enderror
                      </div>
                  </div>
                  <div class="col-md-2">
                      <button class="btn btn-danger btn-sm" wire:click.prevent="remove({{$i}})">Remove</button>
                  </div>
                  @php
                    $i++
                  @endphp
              </div>
            @endforeach --}}
        </div>
        @foreach((array) $inputs as $index => $value)
            <div class=" add-input">
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <input type="text" name="lesson_name[]" class="form-control" wire:model="inputs.{{ $index }}.name" placeholder="المفردة">
                            @error('inputs.'.$index.'.name') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" name="lesson_hours[]" class="form-control" wire:model="inputs.{{ $index }}.value" placeholder="الساعات">
                            @error('inputs.'.$index.'.value') <span class="te xt-danger error">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-danger btn-sm" wire:click.prevent="remove({{$index}})">حذف</button>
                    </div>
                </div>
            </div>
        @endforeach
        @if ($course_id)
          <div class="row">
            <div class="col-md-12">
              <button type="button" wire:click.prevent="store()" class="btn btn-success btn-sm">تحديث</button>
            </div>
          </div>
        @endif
    {{-- </form> --}}
</div>
