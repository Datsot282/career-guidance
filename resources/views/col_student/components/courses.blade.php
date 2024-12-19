
<div class="card recent-sales overflow-auto">

    <div class="card-body">
        <h5 class="card-title">All Courses <span>| Today</span></h5>

        <table class="table table-borderless datatable">
            <thead>
            <tr>
                <th scope="col">School</th>
                <th scope="col">Course Names</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @if($courses->isEmpty())
                <p>No data found for your account.</p>
            @else
                @foreach ($courses as $course)
                    <tr>
                        <th scope="row"><a href="#">
                        </th>
                        <td><a href="#" class="text-primary fw-bold">{{$course->course_name}}</a></td>
                        <td class="align-items-end">
                            <a class="btn-info" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#viewscrollingModal{{$course->course_name}}{{$course->id}}">View</a></li>
                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#applyscrollingModal{{$course->course_name}}{{$course->id}}">Apply</a></li>
                                <div class="modal fade" id="applyscrollingModal{{$course->course_name}}{{$course->id}}" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Scrolling Modal</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body" style="min-height: 1500px;">
                                                Non omnis incidunt qui sed occaecati magni asperiores est mollitia. Soluta at et reprehenderit. Placeat autem numquam et fuga numquam. Tempora in facere consequatur sit dolor ipsum. Consequatur nemo amet incidunt est facilis. Dolorem neque recusandae quo sit molestias sint dignissimos.
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- End Scrolling Modal-->
                                <div class="modal fade" id="viewscrollingModal{{$course->course_name}}{{$course->id}}" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Scrolling Modal</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body" style="min-height: 1500px;">
                                                Non omnis incidunt qui sed occaecati magni asperiores est mollitia. Soluta at et reprehenderit. Placeat autem numquam et fuga numquam. Tempora in facere consequatur sit dolor ipsum. Consequatur nemo amet incidunt est facilis. Dolorem neque recusandae quo sit molestias sint dignissimos.
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- End Scrolling Modal-->
                            </ul>
                </td>
            </tr>
    @endforeach
            @endif
    </tbody>
    </table>

</div>

</div>
