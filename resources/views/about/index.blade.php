@extends('layouts.app')

@section('content')
<div class="page">
    <div class="container content">
        <h2 class="page-title">Kamil Wierciszewski<span>Multimedia Designer</span></h2>

    	<div class="row">
    		<div class="four columns">
    			<img src="/assets/images/kamil.jpg" style="width:90%">
    		</div>
    		<div class="eight columns">
		        <p>I am a multi-talented designer experienced in interactive web, ui/ux, photo retouching, photography, and print design. During my career, I created mood boards, interactive menus, and icons for web navigation.</p>
				<p>I had the pleasure of interacting with many inspireing art developers and directors as a team member that has shown and taught me about me the true meaning of planning and design developement.</p>
				<p>When designing I place a strong emphasis on structure and user experience. The pride I take in creating layouts, that stand out in the eye of the day to day user and  the ability to produce work that can be used by consumers and advertisers, is very rewarding to me. </p>

				<p>The skills implemented with photography are for my personal use and shooting reference for commercial production purposes. </p>

				<p>In the project developement stages, my goal is to implemet the correct workflow to insure efficiency and remove any unnecessary steps thereby saving valuable resources.</p>

				<p>Recent success includes providing assistance to businesses for making the websites more user friendly.</p>

				<p>Bussiness invites clients and allows them to follow through with inquiries, capture, and retain clients for the future.</p>

				<p>s to better their bus  photo-shopping images for print, packaging, and online advertising.</p>

				<p>I am detailed oriented in managing orders and packaged products from development to production.</p>

				<p>I have designed original book covers, posters, and created store displays, catalogs, and booklets.</p>
				<p>I am currently producing UI/UX Designs.</p>

				<p>My current Interests include 3d graphics, special effects ( SFX ), game design, Texturing, Modeling, and Animation.</p>
				<p>Programs and categories that I am involved with are 3d graphics programs - Maya, Blender, SFX - after effects, cinema 4d, and Unreal engine. </p>

				<a class="button" href="{{ route('contact.message') }}">Contact Me</a>&nbsp;&nbsp;&nbsp; <a class="button" href="{{ route('about.resume') }}">View My Resum&egrave;</a>
    		</div>
    	</div>
    </div>
</div>
@endsection
