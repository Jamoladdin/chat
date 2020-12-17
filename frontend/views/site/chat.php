<?php ?>
<div class="container">

        <div class="message-wrap">
            <div class="msg-wrap">

                <?php foreach ($model as $item): ?>
                <?php if (1 == $item->status || (2 == $item->status && Yii::$app->user->can('admin'))): ?>
                    <div class="media msg <?php if (1 == $item->user_id) echo 'msg-admin'?>">
                        <div class="media-body">
                            <?php if (Yii::$app->user->can('admin')): ?>
                            <?php if (2 == $item->status):?>
                                <small class="pull-right ms-er"> Error Message</small>
                            <?php endif; ?>
                            <?php if (1 == $item->status):?>
                                <small class="pull-right "><a href="/site/sign-error?id=<?= $item->id?>">Sign as error</a> </small>
                            <?php endif; ?>
                            <?php endif; ?>
                            <h5 class="media-heading"><?= $item->user->username ?></h5>

                            <small class="col-lg-10"><?= $item->text ?></small>
                        </div>
                    </div>
                <?php endif; ?>
                <?php endforeach; ?>

            </div>

            <?php if(Yii::$app->user->can('admin') || Yii::$app->user->can('user')):?>
            <form action="/site/send" method="post">
                <div class="send-wrap">

                    <input type="hidden" name="<?= Yii::$app->request->csrfParam; ?>" value="<?= Yii::$app->request->csrfToken; ?>" />
                    <textarea class="form-control send-message" name="message" rows="3" placeholder="..."></textarea>

                </div>
                <div class="btn-panel">
                    <button class=" col-lg-4 text-right btn   send-message-btn pull-right" role="button"><i class="fa fa-plus"></i> Send Message</button>
                </div>
            </form>
            <?php endif;?>
     </div>
</div>