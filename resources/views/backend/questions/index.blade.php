@extends('backend.admin-master')

@section('title')
View MCQ Question |Dashboard
@endsection

@section('content')
<div class="container">

    <h3 class="mb-4">View all MCQ Questions</h3>
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>S.N.</th>
                <th>Question</th>
                <th>Option 1</th>
                <th>Option 2</th>
                <th>Option 3</th>
                <th>Option 4</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($questions as $key=>$item)
            <tr>
                <td>{{ serialNumber($questions,$loop,$key) }}</td>
                <td>{{$item->question}}</td>
                <td><span class="badge badge-{{getCorrectClass(1,$item->correct_answer)}}">{{$item->ans_1}}</span></td>
                <td><span class="badge badge-{{getCorrectClass(2,$item->correct_answer)}}">{{$item->ans_2}}</span></td>
                <td><span class="badge badge-{{getCorrectClass(3,$item->correct_answer)}}">{{$item->ans_3}}</span></td>
                <td><span class="badge badge-{{getCorrectClass(4,$item->correct_answer)}}">{{$item->ans_4}}</span></td>
                <td>
                    <a href="{{route('questions.edit',$item->id)}}"><span class="btn btn-xs btn-warning">Edit</span></a>
                    <form action="{{route('questions.destroy',$item['id'])}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" onclick="return confirm('Are you sure')" class="btn btn-xs btn-danger">Delete</button>
                    </form>

                </td>
            </tr>

            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>S.N.</th>
                <th>Question</th>
                <th>Option 1</th>
                <th>Option 2</th>
                <th>Option 3</th>
                <th>Option 4</th>
                <th>Actions</th>
            </tr>
        </tfoot>
    </table>

    <div class="links">
        {{$questions->links()}}
    </div>
</div>

@endsection
