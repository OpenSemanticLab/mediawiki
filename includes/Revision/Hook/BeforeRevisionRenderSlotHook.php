<?php

namespace MediaWiki\Revision\Hook;

use Content;
use MediaWiki\Revision\RevisionRecord;
use User;

/**
 * @stable to implement
 * @ingroup Hooks
 */
interface BeforeRevisionRenderSlotHook {
	/**
	 * This hook is called after the content of a revision slot was fetched and before
     * it gets parsed
	 *
	 * @param Content $content The fetched content
     * @param string $role The role of the fetched content
     * @param array $hints Render hints
	 * @param RevisionRecord $revisionRecord RevisionRecord that contains the slot
     * @param User|null $userObj The current user
	 * @return void
	 */
	public function onBeforeRevisionRenderSlot( &$content, $role, $hints, $revisionRecord, $userObj );
}