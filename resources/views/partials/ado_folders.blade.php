<div class="col-md-3">
  <div class="box box-solid" data-vivaldi-spatnav-clickable="1">
    <div class="box-header with-border">
      <h3 class="box-title">Folders</h3>

      <div class="box-tools">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
        </button>
      </div>
    </div>
    <div class="box-body no-padding">
      <ul class="nav nav-pills nav-stacked">
        <li class=""><a href="/ado" class="text-green"><i class="fa fa-inbox"></i> Inbox
          <span class="label label-success pull-right">{{ $inboxUnreadCount->count() }}</span></a></li>
          <li><a href="/ado_outbox" class="text-blue"><i class="fa fa-envelope-o"></i> Outbox
            <span class="label label-primary pull-right">{{ $outboxUnreadCount->count() }}</span>
          </a></li>
          {{-- <li><a href="#"><i class="fa fa-file-text-o"></i> Drafts</a></li> --}}
          <li><a href="/ado_junk" class="text-orange"><i class="fa fa-filter"></i> Junk <span class="label label-warning pull-right">65</span></a>
          </li>
          <li><a href="/ado_trash" class="text-red"><i class="fa fa-trash-o"></i> Trash <span class="label label-danger pull-right">65</span></a></li>
        </ul>
      </div>
      <!-- /.box-body -->
    </div>
  </div>
