<html>

<body>
    // IfStatements

    @if($name == "")
    < h1> Maaf aku tidak punya nama < /h1>
            @elseif($name == "Jong Koding")
            < h1> Halo, aku {{$name}}
                < /h1>
                    @else
                    < h1> Halo, aku bukan Jong Koding < /h1>
                            @endif


                            // Authentication Directives

                            @auth
                            {{--User diauntetikasi--}}
                            @endauth

                            @guest
                            {{-- User sebagai guest --}}
                            @endguest


                            // Switch Statements

                            @switch($name)
                            @case("Jong Koding")
                            <h1>Halo, aku {{$name}}</h1>
                            @break
                            @case("")
                            <h1>Maaf aku tidak punya nama</h1>
                            @break
                            @default
                            <h1>Halo, aku bukan Jong Koding</h1>
                            @endswitch

                            // Loops

                            {{--for loop--}}
                            @for ($i = 0; $i < 10; $1++) The current value is {{$i}} @endfor {{--for each--}} @foreach ($users as $user) <p>This is User {{$user->id}}</p>
                                @endforeach

                                {{--for else--}}
                                @forelse ($users as $user)
                                <li>{{$user->name}}</li>
                                @endfor

                                {{--while loop--}}
                                @while (true)
                                <p>I'm looping forever.</p>
                                @endwhile


                                // conditional classes

                                @php
                                $isActive = false;
                                $hasError = true;
                                @endphp

                                <span @class([ 'p-4' , 'font-bold'=> $isActive,
                                    'text-gray-500' => ! $isActive,
                                    'bg-red' => $hasError.
                                    ])></span>

                                <span class="p-4 text-gray-500 bg-red"></span>

                                // including subviews

                                @include('directives.loop')
                                @include('directives.conditional', ['name' => 'Jong Koding'])

</body>

</html>