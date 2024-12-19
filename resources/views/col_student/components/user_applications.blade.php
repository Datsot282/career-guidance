<div class="card recent-sales overflow-auto">

                                <div class="card-body">
                                    <h5 class="card-title">My Applications</h5>
                                    <table class="table table-borderless table-hover datatable">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Student Names</th>
                                            <th scope="col">Course</th>
                                            <th scope="col">Date Of Birth</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if($userData->isEmpty())
                                            <p>No data found for your account.</p>
                                        @else
                                            @foreach ($userData as $data)
                                                <tr>
                                                    <th scope="row"><a href="#">#{{ $data->id }}</a></th>
                                                    <td>{{$data->student->name}}</td>
                                                    <td>{{$data->course->course_name}}</td>
                                                    <td>{{$data->student->dateofbirth}}</td>
                                                    @if($data->status=='Declined')
                                                        <td><span class="badge bg-danger">Rejected</span></td>
                                                    @elseif($data->status=='Approved')
                                                        <td><span class="badge bg-success">Approved</span></td>
                                                    @else
                                                        <td><span class="badge bg-info">pending</span></td>
                                                    @endif

                                                </tr>
                                            @endforeach
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
