<x-app-layout title="Car Details">

    <main>
        <div class="container">
            <h1 class="car-details-page-title">{{ $car->name }} ({{ $car->age }} years old)</h1>
            <div class="car-details-region">{{ $car->city->name }} - {{ $car->published_at }}</div>

            <div class="car-details-content">
                <div class="car-images-and-description">
                    <div class="car-images-carousel">
                        <div class="car-image-wrapper">
                            <img src="{{ $car->primaryImage->image_path }}" alt="" class="car-active-image"
                                id="activeImage" />
                        </div>
                        <div class="car-image-thumbnails">
                            @foreach ($car->images as $image)
                                <img src="{{ $image->image_path }}" alt="" />
                            @endforeach
                        </div>
                        <button class="carousel-button prev-button" id="prevButton">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" style="width: 64px">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                            </svg>
                        </button>
                        <button class="carousel-button next-button" id="nextButton">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" style="width: 64px">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                            </svg>
                        </button>
                    </div>

                    <div class="card car-detailed-description">
                        <h2 class="car-details-title">Detailed Description</h2>
                        {!! $car->description !!}
                    </div>

                    <div class="card car-detailed-description">
                        <h2 class="car-details-title">Car Specifications</h2>

                        <ul class="car-specifications">
                            <x-car-specification :value="$car->features->calm">
                                Calm
                            </x-car-specification>
                            <x-car-specification :value="$car->features->playful">
                                Playful
                            </x-car-specification>
                            <x-car-specification :value="$car->features->talkative">
                                Talkative
                            </x-car-specification>
                            <x-car-specification :value="$car->features->kids_friendly">
                                Kids Friendly
                            </x-car-specification>
                            <x-car-specification :value="$car->features->dogs_friendly">
                                Dogs Friendly
                            </x-car-specification>
                            <x-car-specification :value="$car->features->litterbox_trained">
                                Litterbox Trained
                            </x-car-specification>
                            <x-car-specification :value="$car->features->vaccine">
                                Vaccine
                            </x-car-specification>
                            <x-car-specification :value="$car->features->indoor">
                                Indoor
                            </x-car-specification>
                            <x-car-specification :value="$car->features->outdoor">
                                Outdoor
                            </x-car-specification>
                        </ul>
                    </div>
                </div>
                <div class="car-details card">
                    <div class="flex items-center justify-between">
                        <p class="car-details-price">${{ $car->price }}</p>
                        <button class="btn-heart">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" style="width: 20px">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                            </svg>
                        </button>
                    </div>

                    <hr />
                    <table class="car-details-table">
                        <tbody>
                            <tr>
                                <th>Country Origin</th>
                                <td>{{ $car->carType->country->name }}</td>
                            </tr>
                            <tr>
                                <th>Age</th>
                                <td>{{ $car->age > 1 ? "$car->age years old" : "$car->age year old" }}</td>
                            </tr>
                            <tr>
                                <th>Car Type</th>
                                <td>{{ $car->carType->name }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <hr />

                    <div class="flex gap-1 my-medium">
                        <img src="/img/avatar.png" alt="" class="car-details-owner-image" />
                        <div>
                            <h3 class="car-details-owner">{{ $car->owner->name }}</h3>
                            <div class="text-muted">
                                @php
                                    $userCarsCount = $car->owner->cars->count();
                                @endphp
                                {{ $userCarsCount . ' ' . Str::plural('car', $userCarsCount) }}
                            </div>
                        </div>
                    </div>
                    <a href="tel:{{ '+' . Str::mask($car->phone, '*', -3) }}" class="car-details-phone">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" style="width: 16px">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10.5 1.5H8.25A2.25 2.25 0 0 0 6 3.75v16.5a2.25 2.25 0 0 0 2.25 2.25h7.5A2.25 2.25 0 0 0 18 20.25V3.75a2.25 2.25 0 0 0-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                        </svg>

                        {{ '+' . Str::mask($car->phone, '*', -3) }}
                        <span class="car-details-phone-view">view full number</span>
                    </a>
                </div>
            </div>
        </div>
    </main>

</x-app-layout>
