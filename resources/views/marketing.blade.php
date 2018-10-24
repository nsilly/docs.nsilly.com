@extends('app')

@section('body-class', 'home')

@section('content')

<nav id="slide-menu" class="slide-menu" role="navigation">

	<div class="brand">
		<a href="/">
			<img src="/assets/img/laravel-logo-white.png" height="50" alt="Laravel white logo">
		</a>
	</div>

	<ul class="slide-main-nav">
		@include('partials.main-nav')
	</ul>

</nav>

<section class="hero">
	<div class="container">

        <div class="content">
            <h1>Love beautiful code? We do too.</h1>
            <p>The PHP Framework For Web Artisans</p>
        </div>

        @include('partials/browser')

        <div class="macbook">
<pre class="line-numbers"><code class="language-php">

export class Dream
{

	/**
	 * Make your dream come true
	 *
	 * @with silly framework
	 */
	wakeUp()
	{
		// The silly ending...
	}

}</code></pre>
            {!! svg('macbook') !!}
        </div>

        <div class="callout rule">
            <span class="text">See What's New!</span>
        </div>

        <div class="callouts">
            <a href="/docs/horizon" class="callout minimal third">
                <div class="callout-head">
                    <div class="callout-title">Comming Soon</div>
                </div>
                <p>...</p>
            </a>
            <a href="https://nova.laravel.com" class="callout minimal third">
                <div class="callout-head">
                    <div class="callout-title">Comming Soon</div>
                </div>
                <p>...</p>
            </a>
            <a href="/docs/broadcasting" class="callout minimal third">
                <div class="callout-head">
                    <div class="callout-title">Comming Soon</div>
                </div>
                <p>...</p>
            </a>
        </div>
	</div>
</section>
@endsection
