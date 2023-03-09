@foreach ($webinar as $item)
    @php
        $max = $item->max_kuota - $item->kuota;
    @endphp
    <div class="col-md-4">
        <div class="card profile-card shadow-lg">
            <div class="card-img-block card-content">
                <img class="img-fluid" src="@if($max == 0) {{ asset('assets/images/content_images2.jpg') }} @else {{ asset('assets/images/content_images.jpg') }} @endif" alt="Card image cap">
                <h2>{{ $item->title }}</h2>
            </div>
            <div class="card-body pt-5">
                <div class="header-content">
                    <img src="{{ asset('assets/images/user1.jpg') }}" alt="profile-image" class="profile pro1" />
                    <img src="{{ asset('assets/images/user2.jpg') }}" alt="profile-image" class="profile pro2" />
                    <img src="{{ asset('assets/images/user3.jpg') }}" alt="profile-image" class="profile pro3" />
                    <span class="header-content-info btn mobile-hide">Intermediate</span>
                </div>
                <h5 class="card-title">Mentor</h5>
                <p class="card-text">{{ $item->mentor }}</p>
                <span class="card-text-progress">@if($max == 0) Workshop penuh @else Kuota masih tersedia @endif</span>
                <div class="progress">
                    @if($max == 0)
                        <div class="progress-bar progress-tab" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    @else
                        @php
                            $width = ($item->kuota / $item->max_kuota) * 100;
                        @endphp
                        <div class="progress-bar progress-tab2" role="progressbar" style="width: {{ $width }}%" aria-valuenow="{{ $width }}" aria-valuemin="0" aria-valuemax="{{ $width }}"></div>
                    @endif
                </div>
                <p class="text-progress">@if($max == 0) Sayang banget, workshop ini udah full kuotanya. @else Pendaftaraan akan tutup dalam <b>3 hari 12 jam</b> @endif</p>
                @if($max == 0)
                    <a href="#" class="info-card">
                        <span>Lihat silabus yang diberikan di workshop ini</span>
                    </a>
                @else
                    <a href="#" class="info-card2">
                        <span>Pelajari Workshop Lebih Lanjut</span>
                    </a>
                @endif
            </div>
        </div>
    </div>
@endforeach