@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="text-center py-5">Email ricevute</h1>
        <div class="flex-wrap d-flex justify-content-between">
            @foreach ($contatto as $item)
                <div class="card m-2">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->name }}</h5>
                        <p class="card-text">{{ $item->email }}</p>
                        <h6 class="mt-5">Testo email</h6>
                        <p class="card-text">
                            {{ strlen($item->message) > 28 ? substr($item->message, 0, 28) . '...' : $item->message }}.</p>
                        <form action="{{ route('admin.contatto.destroy', $item->id) }}" method="POST"
                            class="d-inline-block mt-5">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Cancella" class="btn btn-danger">
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

<style scoped>
    .card {
        width: calc(100% / 4 - 1rem);
    }
</style>
