<div id="taskDetailsModal" class="modal fade taskDetailsModal" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content task-detail__model">
            <div class="modal-header">
                <h5 class="modal-title">{{ __('messages.task.task_time_entries') }}</h5>
                <button type="button" aria-label="Close" class="close outline-none" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body task-detail__body">
                <div class="row no-gutters time-entry-data">
                    <div class="col-sm-12" id="task-heading"></div>
                    <div class="col-sm-12 mb-2 d-flex">
                        <div class="col-sm-8 pl-0 pt-2" id="total-duration"></div>
                        <div class="col-sm-4 mb-2 pr-0" id="user-drop-down-body">
                            {{Form::select('task_users',[],null,['id'=>'task_users','class'=>'form-control'])  }}
                        </div>
                    </div>
                    <table class="table table-responsive-sm table-striped table-bordered" id="taskDetailsTable">
                        <thead>
                        <tr>
                            <th></th>
                            <th>{{ __('messages.task.user') }}</th>
                            <th>{{ __('messages.task.start_time') }}</th>
                            <th>{{ __('messages.task.end_time') }}</th>
                            <th>{{ __('messages.task.duration') }}</th>
                            <th>{{ __('messages.common.action') }}</th>
                        </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
                <div id="no-record-info-msg">{{ __('messages.task.no_time_entries_found_for') }}</div>
            </div>
        </div>
    </div>
</div>
