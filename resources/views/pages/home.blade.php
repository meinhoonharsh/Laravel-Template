
@extends('layouts.admin')

@section('content')



<div class="card shadow border-0 mb-7">
    <div class="card-header">
        <h5 class="mb-0">Applications</h5>
    </div>
    <div class="table-responsive">
        <table class="table table-hover table-nowrap">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Company</th>
                    <th scope="col">Duration</th>
                    <th scope="col">Status</th>
                    <th scope="col">Actions</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>

                @forelse($quizzes as $quiz)
                <tr>
                    <td>
                        <a class="text-heading font-semibold" href="#">
                            {{$quiz->name}}
                        </a>
                    </td>
                    <td>
                        {{$quiz->company}}
                    </td>
                    <td>
                        {{$quiz->duration}}
                    </td>
                    <td>
                        <span class="badge badge-lg badge-dot">
                            <a href="/changestatus/{{$quiz->id}}">
                                @if($quiz->status)
                                    <i class="bg-success"></i>Active
                                @else
                                    <i class="bg-secondary"></i>Inactive
                                @endif


                            </a>
                        </span>
                    </td>
                    <td class="">
                        <a href="/editquiz/{{$quiz->id}}" class="btn btn-sm btn-neutral">
                            <i class="bi bi-pencil"></i>Edit</a>
                        {{-- <button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover">
                            <i class="bi bi-trash"></i>
                        </button> --}}
                    </td>
                </tr>
                @empty
                @endforelse
                
                
                
            </tbody>
        </table>
    </div>
    <div class="card-footer border-0 py-5">
        <span class="text-muted text-sm">Showing 10 items out of 250 results found</span>
    </div>
</div>



@endsection
