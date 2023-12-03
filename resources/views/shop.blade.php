@extends('layouts.master')

@section('contents')

<section class="py-16">
    <div class="max-w-screen-xl mx-auto px-4 md:px-8">
      <div class="max-w-md">
        <h1 class="text-gray-800 text-xl font-extrabold sm:text-2xl">
         Shop Details
        </h1>
      </div>
      <ul class="mt-16 grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
          <li class="border rounded-lg bg-white">
            <div class="flex items-start justify-between p-4">
              <div class="space-y-2">
                <h3
                  class="text-gray-800 font-semibold"
                >
                  Shop Name: {{ $shopDetails->name }}
            </h3>
                <h4 class="text-gray-600 text-sm"> <strong>Shop ID:</strong> {{ $shopDetails->id }}  </h4>
              </div>
            </div>
          </li>
      </ul>
    </div>
  </section>
@endsection