<?php require_once '../app/views/templates/header.php' ?>

<div class="row">
    <div class="col-sm-4">
        <h2>Add a new reminder</h2>
        <form id="reminderform" 
              method="post" 
              action="<?= REMINDER_CREATE ?>"
              class="form-horizontal">
            <div class="row">
                <label for="subjects"
                       class="col-sm-3 control-label">Subject</label>
                <div class="col-sm-9">
                    <input type="text"
                           id="subject"
                           name="subject"
                           placeholder="Subject"
                           class="form-control"/>
                </div>
            </div>

            <div class="row">
                <label for="description"
                       class="col-sm-3 control-label">Description</label>
                <div class="col-sm-9">
                    <textarea id="description"
                              name="description"
                              class="form-control"
                              rows="4"></textarea>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col">
                    <input type="submit" 
                           class="btn btn-primary btn-block" 
                           value="Submit"/>
                </div>
            </div>
        </form>
    </div>

    <div class="col-sm-8">
        <h2>View Reminder(s) </h2>
        <table id="reminderlist"
               class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Id</th>
                    <th>Created By</th>
                    <th>Subject</th>
                    <th>Description</th>
                    <th>Created Date</th>

                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($data->get_reminders() as $reminder) {
                    ?>
                    <tr>
                        <td><?= $reminder['id'] ?></td>
                        <td><?= $reminder['Username'] ?></td>
                        <td><?= $reminder['subject'] ?></td>
                        <td><?= $reminder['description'] ?></td>
                        <td><?= $reminder['createdDate'] ?></td>

                        <td><a href="<?= REMINDER_UPDATE . DS . $reminder['id']; ?>">Update</a></td>
                        <td><a href="<?= REMINDER_DELETE . DS . $reminder['id']; ?>">Remove</a></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php require_once '../app/views/templates/footer.php' ?>