@include('admin.layouts.app')

<div class="main-container multivendors" id="container">

    @include('admin.layouts.sidebar')

    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content wallet">

        <div class="row justify-content-between align-items-center mb-10 mt-30">
            <!-- Page Heading Start-->
            <div class="col-12 col-lg-auto mb-2 pt-4 ">
                <div class="page-heading">
                    <h6>Staff <span>/ All Staff</span></h6>
                </div>
            </div>
            <!--Page Heading End -->
        </div>

        <div class="lead_mang allstd-page" id="navbarscroll">
            <h2>All Staff</h2>

            <table class="table table-striped custab">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone No.</th>
                        <th>Email Address</th>
                        <th>Role</th>
                        <th>Created</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Action</th>

                    </tr>
                </thead>
                <?php $i = 1; ?>
                @foreach($members as $member)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$member->name}}</td>
                    <td>{{$member->phone}}</td>
                    <td>{{$member->email}}</td>
                    <td>{{$member->role}}</td>
                    <td>{{$member->created_at}}</td>
                    <td class="text-center">
                        <label class="switch">
                        <input type="checkbox" <?php if($member->status == 1) echo "checked"; ?> onclick="active(this.value)" id="active" value="{{$member->id}}">
                            <span class="slider round"></span>
                        </label><br>
                    </td>
                    <td>
                    <a href="{{asset('admin/staff/edit/'.$member->id)}}"><button type="button" class="btn btn-success">Edit</button></a>
                    <a href="{{asset('admin/staff/Delete/'.$member->id)}}"><button type="button" class="btn btn-danger">Delete</button></a>

                    </td>
                </tr>
                @endforeach

            </table>
        </div>


    </div>
    <!--  END CONTENT AREA  -->

</div>
<!-- END MAIN CONTAINER -->
<script>
    function active(admin_id) {
        var active;

        if ($('#active').is(":checked")) active = '1';
        else active = '0';

        $.ajax({
            url: 'update_active/' + admin_id + '/' + active,
            type: 'get',
            data: {},
            success: function(result) {}

        });

    }
</script>

@include('staff.layouts.footer')