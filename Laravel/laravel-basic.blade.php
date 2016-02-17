{{-- // Bind an object field to the root model --}}
{{ $router->bind('post', function ($id) { return \App\Post::whereId($id)->first(); }) }}

{{-- Get the current URL  --}}
{{Request::url()}}


{{-- Open Form Model --}}
{!! Form::model($listing, ['method'=> 'PATCH', 'route' => ['listings.update', $listing->slug]]) !!}

{{-- Eloquent Forms --}}
{{-- @requires laravelcollective\html --}}
{{-- Form: Fields --}}
{!! Form::radio('type', 'individual') !!}
{!! Form::textarea('description', null, array('class' => 'form-control'))!!}
{!! Form::text('telephone', null, array('class' => 'form-control'))!!}
{!! Form::submit('Click Me!') !!}
{{-- Form: Edit Model --}}
{!! Form::model($listing, ['method'=> 'PATCH', 'route' => ['listings.update', $listing->slug]]) !!}