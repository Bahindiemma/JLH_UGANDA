@extends('admin.layout.app')

@section('content')

    @if(Session::has('success_message'))
        <div class="alert alert-success">
            <span class="glyphicon glyphicon-ok"></span>
            {!! session('success_message') !!}

            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>

        </div>
    @endif

    <div class="panel panel-default">

        <div class="panel-heading clearfix">

            <div class="pull-left">
                <h4 class="mt-5 mb-5">F A Qs</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('faqs.create') }}" class="btn btn-success" title="Create New F A Q">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($fAQs) == 0)
            <div class="panel-body text-center">
                <h4>No F A Qs Available.</h4>
            </div>
        @else

        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Category</th>
                            <th>Faq By</th>
                            <th>Date</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($fAQs as $fAQ)
                        <tr>
                            <td>{{ $fAQ->category }}</td>
                            <td>{{ optional($fAQ->faqBy)->id }}</td>
                            <td>{{ $fAQ->date }}</td>

                            <td>

                                <form method="POST" action="{!! route('f_a_qs.f_a_q.destroy', $fAQ->id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('f_a_qs.f_a_q.show', $fAQ->id ) }}" class="btn btn-info" title="Show F A Q">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('f_a_qs.f_a_q.edit', $fAQ->id ) }}" class="btn btn-primary" title="Edit F A Q">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete F A Q" onclick="return confirm(&quot;Click Ok to delete F A Q.&quot;)">
                                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                        </button>
                                    </div>

                                </form>
                                
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>

        <div class="panel-footer">
            {!! $fAQs->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection