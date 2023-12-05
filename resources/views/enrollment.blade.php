@extends('layout.app')

@section('content')
    <style>
        h1{
            text-align: center;
            font-family: Algerian; 
            font-size: 100px;
            padding-top: 1rem;
            padding-bottom: 1rem;
        }

        form{
            display: flex;
            gap: 0.5rem;
            padding-bottom: 1.5rem;
            font-size: 18px;
            font-family: Garamond;
        }
        
        table{
            font-family: Garamond;
        }

        /* add */
        .add {
            font-family: inherit;
            font-size: 16px;
            background: royalblue;
            color: white;
            padding: 0.7em 1em;
            padding-left: 0.9em;
            display: flex;
            align-items: center;
            border: none;
            border-radius: 16px;
            overflow: hidden;
            transition: all 0.2s;
            cursor: pointer;
        }

        .add span {
            display: block;
            margin-left: 0.3em;
            transition: all 0.3s ease-in-out;
        }

        .add svg {
            display: block;
            transform-origin: center center;
            transition: transform 0.3s ease-in-out;
        }

        .add:hover .svg-wrapper {
            animation: fly-1 0.6s ease-in-out infinite alternate;
        }

        .add:hover svg {
            transform: translateX(1.2em) rotate(45deg) scale(1.1);
        }

        button:hover span {
            transform: translateX(5em);
        }

        .add:active {
            transform: scale(0.95);
        }

        @keyframes fly-1 {
            from {
                transform: translateY(0.1em);
            }

            to {
                transform: translateY(-0.1em);
            }
        }

        /* delete */
        .button {
            position: relative;
            width: 140px;
            height: 30px;
            cursor: pointer;
            display: flex;
            align-items: center;
            border: 1px solid #cc0000;
            background-color: #e50000;
            overflow: hidden;
            border-radius: .5rem;
        }

        .button, .button__icon, .button__text {
            transition: all 0.3s;
        }

        .button .button__text {
            transform: translateX(35px);
            color: #fff;
            font-weight: 600;
        }

        .button .button__icon {
            position: absolute;
            transform: translateX(109px);
            height: 100%;
            width: 27px;
            background-color: #cc0000;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .button .svg1 {
            width: 20px;
        }

        .button:hover {
            background: #cc0000;
        }

        .button:hover .button__text {
            color: transparent;
        }

        .button:hover .button__icon {
            width: 135px;
            transform: translateX(0);
        }

        .button:active .button__icon {
            background-color: #b20000;
        }

        .button:active {
            border: 1px solid #b20000;
        }

        
    </style>

    <h1>Enrollment System</h1>
    
    <div>

        <div class="row">
            <form action="{{route('saveEnrollments')}}" method="post">
                @csrf
                <label for="Name" class="col"></label>
                <input class="inputs" type="text" name="Name" placeholder="Name">

                <label for="Address" ></label>
                <input class="inputs" type="text" name="Address" placeholder="Address">

                <label for="Subject1" ></label>
                <input class="inputs" type="text" name="Subject1" placeholder="Subject1">

                <label for="Subject2" ></label>
                <input class="inputs" type="text" name="Subject2" placeholder="Subject2">

                <label for="Subject3" ></label>
                <input class="inputs" type="text" name="Subject3" placeholder="Subject3">

                <label for="Subject4" ></label>
                <input class="inputs" type="text" name="Subject4" placeholder="Subject4">

                <label for="Subject5" ></label>
                <input class="inputs" type="text" name="Subject5" placeholder="Subject5">

                <div class="col">
                    <button class="add">
                        <div class="svg-wrapper-1">
                            <div class="svg-wrapper">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24"
                                    width="24"
                                    height="24">
                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                    <path
                                        fill="currentColor"
                                        d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <span>Submit</span>
                    </button>
                </div>
            </form>
        </div>

        <table class="table table-dark table-striped">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Subject1</th>
                    <th>Subject2</th>
                    <th>Subject3</th>
                    <th>Subject4</th>
                    <th>Subject5</th>
                </tr>   
            </thead>

            <tbody>
                @foreach($enrollments as $enrollment )
                    <tr>
                        <td>{{ $enrollment->id }}</td>
                        <td>{{ $enrollment->Name }}</td>
                        <td>{{ $enrollment->Address }}</td>
                        <td>{{ $enrollment->Subject1 }}</td>
                        <td>{{ $enrollment->Subject2 }}</td>
                        <td>{{ $enrollment->Subject3 }}</td>
                        <td>{{ $enrollment->Subject4 }}</td>
                        <td>{{ $enrollment->Subject5 }}</td>

                        <td>
                            <a href="{{route('removeEnrollments', $enrollment->id)}}">
                                <button class="button" type="button">
                                    <span class="button__text">Delete</span>
                                    <span class="button__icon"><svg class="svg1" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><title></title><path d="M112,112l20,320c.95,18.49,14.4,32,32,32H348c17.67,0,30.87-13.51,32-32l20-320" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></path><line style="stroke:#fff;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px" x1="80" x2="432" y1="112" y2="112"></line><path d="M192,112V72h0a23.93,23.93,0,0,1,24-24h80a23.93,23.93,0,0,1,24,24h0v40" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></path><line style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" x1="256" x2="256" y1="176" y2="400"></line><line style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" x1="184" x2="192" y1="176" y2="400"></line><line style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" x1="328" x2="320" y1="176" y2="400"></line></svg></span>
                                </button>
                            </a>
                        </td>
                    </tr> 
                @endforeach
            </tbody>
        </table>
    </div>

@endsection

@section('title')
    Home Page
@endsection