
@extends('layouts.layout')

@section('content')



<x-card class="max-w-lg mx-auto mt-24">
  <header class="text-center">
    <h2 class="text-2xl font-bold uppercase mb-1">
      Create a Character
    </h2>
      <p class="mb-4">Build a character</p>
  </header>

                    <form method="POST" action="/characters/create" class="w-full max-w-lg">
                      @csrf
                      <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                Player ID
                            </label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="01" name="u_id">
                            @error('u_id')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                      
                        <div class="w-full md:w-1/2 px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                                Character Name
                            </label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Jay Do" name="meta_name">
                             @error('meta_name')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                      </div>
                           
                      <div class="inline-block relative w-64">
                        
                        <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline" name="meta_type">
                            <option value="">Select Meta Type</option>

                            @foreach ($ddlData as $meta)
                                <option value="{{$meta->id}}">{{$meta->meta_type}} </option>
                            @endforeach
                        </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                            </div>
                    
                      </div>
                     
                       

                        {{--<div class="mb-6">
                            <label for="logo" class="inline-block text-lg mb-2">
                                Company Logo
                            </label>
                            <input
                                type="file"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="logo"
                            />
                        </div>--}}

                        <div class="flex items-center border-b border-teal-500 py-2">
                            <button class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded" type="submit" >
                                Next
                              </button>
                              <button class="flex-shrink-0 border-transparent border-4 text-teal-500 hover:text-teal-800 text-sm py-1 px-2 rounded" type="button">
                                <a href="/" class="text-black ml-4"> Back </a>
                              </button>
                            
                        </div>
                    </form>
                  </x-card>

@endsection