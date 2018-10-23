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
&lt;?php


class Idea extends Eloquent
{

	/**
	 * Dreaming of something more?
	 *
	 * @with Laravel
	 */
	public function create()
	{
		// Have a fresh start...
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
                    <div class="callout-title">Laravel Horizon</div>
                    <div class="callout-icon">{!! svg('logo-horizon')!!}</div>
                </div>
                <p>Laravel Horizon provides a beautiful dashboard and code-driven configuration for your Redis queues.</p>
            </a>
            <a href="https://nova.laravel.com" class="callout minimal third">
                <div class="callout-head">
                    <div class="callout-title">Laravel Nova</div>
                    <div class="callout-icon"><?php echo svg('laravel-nova'); ?></div>
                </div>
                <p>Laravel Nova is a beautiful administration panel designed by the creator of Laravel.</p>
            </a>
            <a href="/docs/broadcasting" class="callout minimal third">
                <div class="callout-head">
                    <div class="callout-title">Laravel Echo</div>
                    <div class="callout-icon">{!! svg('logo-echo')!!}</div>
                </div>
                <p>Event broadcasting, evolved. Bring the power of WebSockets to your application without the complexity.</p>
            </a>
        </div>
	</div>
</section>
@endsection
