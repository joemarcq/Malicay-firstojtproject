<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
    <h1>{{ $post->subject }}</h1> 
    <p class="text-gray-500">Posted by {{ $post->user->name . ' ' . $post->created_at->diffForHumans() }}</p>
    <br><br>
    @foreach($post->comments as $comment)
        {{  $comment->user->name . ': ' . $comment->content }} {{  $comment->created_at->diffForHumans() }} <br>

    @endforeach



    {!! Form::open(['action' => 'CommentController@store']) !!}

        {{  Form::hidden('post_id', $post->id) }}
        {!! Form::hidden('user_id', Auth::user()->id) !!}
        {!! Form::textarea('content', '', ['placeholder' => 'Write a comment...']) !!} <br>

        {!! Form::submit('Comment', ['class' => 'bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded']) !!}

    {!! Form::close() !!}

    </div>
            </div>
        </div>
    </div>
</x-app-layout>