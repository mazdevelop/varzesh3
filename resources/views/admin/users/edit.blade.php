@extends('layouts.admin')
@section('content')
    @include('partial.form.errors')
    <div class="container my-2">
       <div class="grid grid-cols-1 sm:grid-cols-2 gap-2">
            <div class="flex items-center justify-center">
            <img class="w-30 h-30 rounded-md" src="{{$user->photo ? $user->photo->path : "http://placehold.it/400" }}" alt="">
        </div>
        <div class="">
            <h1 class="text-2xl flex flex-row-reverse my-4">ویرایش کاربر</h1>
            <form action="{{ route('user.update',$user->id) }}" method="POST"  enctype="multipart/form-data" accept-charset="UTF-8">
            @csrf
            @method('PUT')
                <div class="">
                    <label for="name" class="text-xs focus:border-indigo-600  flex flex-row-reverse  ">نام و نام خانوادگی</label>
                    <input type="text" name="name" id="name" value="{{ $user->name }}" class="w-full py-3 shadow-md border-gray-400 rounded-md my-3 focus:border-indigo-600">
                </div>
                <div class="">
                    <label for="password" class="text-xs focus:border-indigo-600  flex flex-row-reverse  ">رمز عبور</label>
                    <input type="password" name="password" id="password" class="w-full shadow-md py-3 border-gray-400 rounded-md my-3 focus:border-indigo-600">
                </div>
                <div class="">
                    <label for="email" class="text-xs  focus:border-indigo-600  flex flex-row-reverse  ">پست الکترونیکی</label>
                    <input type="email" name="email" value="{{ $user->email }}" id="email" class="w-full py-3 shadow-md border-gray-400 rounded-md my-3 focus:border-indigo-600">
                </div>
                <div class="">
                    <label for="photo_id" class="text-xs  focus:border-indigo-600  flex flex-row-reverse  ">آپلود عکس</label>
                    <input type="file" name="photo_id" id="photo_id" class="w-full py-3 shadow-md border-gray-400 rounded-md my-3 focus:border-indigo-600">
                </div>
                <div class="">
                    <label for="role" class="text-xs my-3 flex flex-row-reverse">نقش کاربری</label>
                    <select name="roles[]" multiple="multiple" id="role" class="border-gray-300 rounded w-3/4">
                        @foreach ($roles as $roleKey => $roleValue) 
                            <option value="{{$roleKey}}" 
                                @foreach ($role_user as $key => $value)
                                    @if ($value == $roleKey)
                                        selected
                                    @endif
                                @endforeach
                            class="text-xs text-center text-gray-600">{{$roleValue}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="">
                    <label for="status" class="text-xs my-3 flex flex-row-reverse">وضعیت</label>
                    <select name="status" class="border-gray-300 text-xs  grid place-items-center rounded w-3/4" id="status">
                            <option value="فعال" {{$user->status == "فعال" ? 'selected' : ''}} class="place-self-center">فعال</option>
                            <option value="غیر فعال" {{$user->status == "غیر فعال" ? 'selected' : ''}} class="place-self-center">غیر فعال</option>
                    </select>
                </div>
                <div class="w-full grid place-items-center my-8">
                    <button type="submit" class="w-1/2 text-center py-2
                     bg-indigo-700 text-white  outline-none 
                    hover:bg-indigo-100 hover:text-indigo-600 transition-colors 
                         rounded-md text-sm duration-1000 ease-in-out cursor-pointer hover:shadow-md">
                         ارسال
                    </button>
                </div>
            </form>
        </div>
       </div>
    </div>
@endsection