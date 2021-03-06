@extends('layouts.main')

@section('content')
<section class="section section--details section--bg" data-bg="">
    <!-- details content -->
    <div class="container">
        <div class="row">
        
<!-- player -->
<div class="col-12 col-lg-3 mb-4">
<div class="card__cover">
    <img src="{{ $tvshow['poster_path'] }}" alt="">
    <span class="card__rate card__rate--green">{{ $tvshow['vote_average'] }}</span>
</div>
</div>

<div class="col-12 col-lg-1">
</div>
<!-- end player -->
            <!-- content -->
            
            <div class="col-12 col-lg-8">
                <div class="card card--details">
                        <!-- title -->
            <h1 class="section__title">{{ $tvshow['name'] }}</h1>
            <!-- end title -->
                    <div class="row">
                    <!-- card content -->
                        <div class="col-12 col-sm-7 col-lg-12 col-xl-12">
                            <div class="card__content">
                                <ul class="card__meta">
                                    <li>First Air Date: <span class="ml-3" style="color: #ffd80e">{{ $tvshow['first_air_date'] }}</span></li>
                                    <li>Genres: <span class="ml-3" style="color: #ffd80e">{{ $tvshow['genres'] }}</span></li>
                                </ul>
                                <div class="card__description">
                                    {{ $tvshow['overview'] }}
                                </div>
                            </div>
                        </div>
                        <!-- end card content -->
                    </div>
<br>
                    <div class="row">
                        <!-- card content -->
                            <div class="col-12 col-sm-7 col-lg-6 col-xl-12">
                                <div class="card__content">
                                    <ul class="card__meta">
                                        <li>Featured Crew</li>
                                
                                    </ul>
                                    <br>
                                    <div class="row">
                                        @foreach ($tvshow['created_by'] as $crew)
                                        <div class="col-12 col-lg-2 col-sm-12 mb-4">
                                            <div class="card__cover">
                                             <div style="color: white">{{ $crew['name'] }}</div>
                                           <div style="color: #ffd80e">Creator</div>
                                            </div>
                                        </div>
                                          @endforeach
                                     
                                    </div>
                                </div>
                               
                            </div>
                           
                            <!-- end card content -->
                        </div>
                </div>
            </div>
            <!-- end content -->
        </div>
    </div>
    <!-- end details content -->
</section>

	<div class="container">
		<div class="row">
			<div class="col-12 mb-4">
				<h2 class="content__title">Casts</h2>
			</div>
			
				<div class="container">
                <div class="row">
                    <!-- card -->
                    @foreach ($tvshow['cast'] as $cast)
                    <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                        <div class="card">
                            <div class="card__cover">
                                <a href="{{ route('actors.show', $cast['id']) }}">
                                    <img src="{{ $cast['profile_path'] }}" alt="actor">
                                </a>
                            </div>
                            <div class="card__content">
                                <h3 class="card__title"> <a href="{{ route('actors.show', $cast['id']) }}">{{ $cast['name'] }}</a></h3>
                               
                                <span class="card__category" style="color: #ffd80e">
                                    {{ $cast['character'] }}
                                </span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- end card -->
                </div>
            </div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-12 mb-4">
				<h2 class="content__title">Images</h2>
			</div>
			<!-- project gallery -->
				<div class="container">
            <div class="gallery" itemscope="">
				<div class="row">
                    <!-- gallery item -->
                    @foreach ($tvshow['images'] as $image)
					<figure class="col-12 col-sm-6 col-xl-4" itemprop="associatedMedia" itemscope="">
						<a href="{{ 'https://image.tmdb.org/t/p/w500/'.$image['file_path'] }}" itemprop="contentUrl" data-size="1920x1280">
							<img src="{{ 'https://image.tmdb.org/t/p/w500/'.$image['file_path'] }}" itemprop="thumbnail" alt="Image">
                        </a>
                    </figure>
                    @endforeach
					<!-- end gallery item -->
				</div>
			</div>
        </div>
			<!-- end project gallery -->
		</div>
	</div>
@endsection
