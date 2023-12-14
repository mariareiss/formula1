<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editBuilderModal<?php echo $builder['team_builder_id']; ?>">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
    </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="editBuilderModal<?php echo $builder['team_builder_id']; ?>" tabindex="-1" aria-labelledby="editBuilderModallabel<?php echo $builder['team_builder_id']; ?>" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editBuilderModallabel<?php echo $builder['team_builder_id']; ?>">Edit Builder</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="">
                    <div class="mb-3">
                        <label for="driverName<?php echo $builder['team_builder_id']; ?>" class="form-label">Driver Name</label>
                        <input type="text" class="form-control" id="driverName<?php echo $builder['team_builder_id']; ?>" name="driverName" value="<?php echo $builder['driver_b_name']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="teamName<?php echo $builder['team_builder_id']; ?>" class="form-label">Team Name</label>
                        <input type="text" class="form-control" id="teamName<?php echo $builder['team_builder_id']; ?>" name="teamName" value="<?php echo $builder['team_b_name']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="principalName<?php echo $builder['team_builder_id']; ?>" class="form-label">Principal Name</label>
                        <input type="text" class="form-control" id="principalName<?php echo $builder['team_builder_id']; ?>" name="principalName" value="<?php echo $builder['team_principal_name']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="season<?php echo $builder['team_builder_id']; ?>" class="form-label">Season</label>
                        <input type="text" class="form-control" id="season<?php echo $builder['team_builder_id']; ?>" name="season" value="<?php echo $builder['team_b_season']; ?>">
                    </div>
                    <input type="hidden" name="dbi" value="<?php echo $builder['team_builder_id']; ?>">
                    <input type="hidden" name="actionType" value="Edit">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
