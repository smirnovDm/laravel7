@extends('layouts.app')

@section('content')
    <form class="w-50 ml-5" method="POST" action="/test/send">
        {{csrf_field()}}
        <div class="form-group">
            <label for="exampleInputEmail1">Phone</label>
            <input type="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="phone" required>
        </div>
        <div class="form-group form-check">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="vodafone" name="sims[]" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                    Vodafone
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="kyevstar" name="sims[]" id="defaultCheck2">
                <label class="form-check-label" for="defaultCheck2">
                    Kyevstar
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="life" name="sims[]" id="defaultCheck2">
                <label class="form-check-label" for="defaultCheck2">
                    Life
                </label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Send me SMS</button>
    </form>

    @if (\Session::has('success'))
        <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('success') !!}</li>
            </ul>
        </div>
    @endif

@endsection
