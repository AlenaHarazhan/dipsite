@extends('layouts.base')
@push('styles')
<link rel="stylesheet" href="{{asset('styles/pages/characters.css')}}" type="text/css" media="all" />
@endpush
@section('content')
<div id="namegallery">{{$obj->name}}</div>
@include('includes.gallery_breadcrumbs')


                <div id="container">
                    <div id="img1" class= "window">
                        <div class="overlay">
                            <div class="text">
                                <h2 class="class-for-28px">"Squirrel"</h2>
                                <p class="class-for-22px">Style: cartoon</p>
                                <p class="class-for-22px">Technique: computer graphics (raster)</p>
                            </div>
                        </div>
                    </div>

                    <!-- <img id="myImg" src='../images/pages/characters/family_s.jpg' alt="Family" style="width:100%;max-width:300px">

                    <div id="myModal" class="modal">
                        <span class="close">&times;</span>
                        <img class="modal-content" id="img01">
                        <div id="caption"></div>
                    </div> -->

                    <div id="img2" class= "window">
                        <div class="overlay">
                            <div class="text">
                                <h2 class="class-for-28px">"Racoon"</h2>
                                <p class="class-for-22px">Style: cartoon</p>
                                <p class="class-for-22px">Technique: computer graphics (raster)</p>
                            </div>
                        </div>
                    </div>
                    <div id="img3" class= "window">
                        <div class="overlay">
                            <div class="text">
                                <h2 class="class-for-28px">"Panda"</h2>
                                <p class="class-for-22px">Style: cartoon</p>
                                <p class="class-for-22px">Technique: computer graphics (raster)</p>
                            </div>
                        </div>
                    </div>
                    <div id="img4" class= "window">
                        <div class="overlay">
                            <div class="text">
                                <h2 class="class-for-28px">"Kitten"</h2>
                                <p class="class-for-22px">Style: cartoon</p>
                                <p class="class-for-22px">Technique: computer graphics (raster)</p>
                            </div>
                        </div>
                    </div>
                    <div id="img5" class= "window">
                        <div class="overlay">
                            <div class="text">
                                <h2 class="class-for-28px">"Fox"</h2>
                                <p class="class-for-22px">Style: cartoon</p>
                                <p class="class-for-22px">Technique: computer graphics (raster)</p>
                            </div>
                        </div>
                    </div>
                    <div id="img6" class= "window">
                        <div class="overlay">
                            <div class="text">
                                <h2 class="class-for-28px">"Grandmother"</h2>
                                <p class="class-for-22px">Style: cartoon</p>
                                <p class="class-for-22px">Technique: computer graphics (raster)</p>
                            </div>
                        </div>
                    </div>
                    <div id="img7" class= "window">
                        <div class="overlay">
                            <div class="text">
                                <h2 class="class-for-28px">"Pregnant woman"</h2>
                                <p class="class-for-22px">Style: cartoon</p>
                                <p class="class-for-22px">Technique: computer graphics (raster)</p>
                            </div>
                        </div>
                    </div>
                    <div id="img8" class= "window">
                        <div class="overlay">
                            <div class="text">
                                <h2 class="class-for-28px">"Girl and Boy"</h2>
                                <p class="class-for-22px">Style: cartoon</p>
                                <p class="class-for-22px">Technique: computer graphics (raster)</p>
                            </div>
                        </div>
                    </div>
                    <div id="img9" class= "window">
                        <div class="overlay">
                            <div class="text">
                                <h2 class="class-for-28px">"Merchant"</h2>
                                <p class="class-for-22px">Style: cartoon</p>
                                <p class="class-for-22px">Technique: computer graphics (raster)</p>
                            </div>
                        </div>
                    </div>
                    <div id="img10" class= "window">
                        <div class="overlay">
                            <div class="text">
                                <h2 class="class-for-28px">"Characters of the Fantasy"</h2>
                                <p class="class-for-22px">Style: cartoon</p>
                                <p class="class-for-22px">Technique: computer graphics (raster)</p>
                            </div>
                        </div>
                    </div>
                    <div id="img11" class= "window">
                        <div class="overlay">
                            <div class="text">
                                <h2 class="class-for-28px">"Monsters"</h2>
                                <p class="class-for-22px">Style: cartoon</p>
                                <p class="class-for-22px">Technique: computer graphics (raster)</p>
                            </div>
                        </div>
                    </div>
                    <div id="img12" class= "window">
                        <div class="overlay">
                            <div class="text">
                                <h2 class="class-for-28px">"Family"</h2>
                                <p class="class-for-22px">Style: cartoon</p>
                                <p class="class-for-22px">Technique: computer graphics (vector)</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="center">
                    <div class="pagination">
                        <a href="#">«</a>
                        <a href="#" class="active">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>
                        <a href="#">6</a>
                        <a href="#">»</a>
                    </div>
                </div>
                <div id="up">
                    <a href="#" onclick="return up()">
                        <img src="../images/up.png">
                    </a>
                </div>
@endsection
