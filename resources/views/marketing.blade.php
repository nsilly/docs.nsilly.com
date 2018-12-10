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
            <h1>It's bad, but it works!</h1>
            <p>The Silly Framework</p>
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

	</div>
</section>
@endsection
