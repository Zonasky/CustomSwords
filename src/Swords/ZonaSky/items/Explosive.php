<?php
declare(strict_types = 1);

namespace Swords\ZonaSky\items;

use customiesdevs\customies\item\component\HandEquippedComponent;
use customiesdevs\customies\item\CreativeInventoryInfo;
use customiesdevs\customies\item\ItemComponentsTrait;
use pocketmine\item\ItemIdentifier;
use pocketmine\item\ToolTier;
use pocketmine\nbt\tag\CompoundTag;
use pocketmine\nbt\tag\ListTag;

class Explosive extends \pocketmine\item\Sword implements \customiesdevs\customies\item\ItemComponents {
	use ItemComponentsTrait {
		getComponents as _getComponents;
	}

	public function __construct(ItemIdentifier $identifier, string $name) {
		parent::__construct($identifier, $name, ToolTier::DIAMOND());
		$this->initComponent("explosive_sword", new CreativeInventoryInfo(CreativeInventoryInfo::CATEGORY_EQUIPMENT, CreativeInventoryInfo::GROUP_SWORD));
		$this->addComponent(new HandEquippedComponent(true));
	}

	public function getMaxDurability() : int
  {
		return 2101;
  }

protected function getBaseMiningEfficiency() : float 
  {
		return 13;
  }
}
