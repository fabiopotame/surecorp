<?php
App::uses('AppModel', 'Model');

class Netflixroulette extends AppModel {

	public $useTable = false;

	public $movies = array(
		"Hook",
		"Close Encounters of the Third Kind: 30th Anniversary Ultimate Edition",
		"Jane Eyre",
		"Amistad",
		"Center Stage: Turn It Up",
		"Stand Up Guys",
		"The Undying",
		"Killing Season",
		"Until They Are Home",
		"Hello Sister, Goodbye Life",
		"Redemption",
		"Hunger",
		"Movie 43",
		"Mindless Behavior: All Around the World",
		"Jackie Mason Is...One Angry Man",
		"Side Effects",
		"Tent City, U.S.A.",
		"At First Sight",
		"Gun Fever",
		"Escape from Hell Island",
		"Fanfare for a Death Scene",
		"Hero's Island",
		"The Big Caper",
		"Ambush Murders",
		"Forbidden Love",
		"Anatomy of a Seduction",
		"Ultimate Avengers: The Movie",
		"Shelter Me",
		"George Carlin: Carlin at Carnegie",
		"George Carlin: Carlin on Campus",
		"Morning Glory",
		"Mythic Journeys",
		"Fire from Below",
		"The Horseman",
		"4 Weeks of Sunshine",
		"The Rescuers",
		"Che",
		"The Adventures of Tintin",
		"The Fox and the Hound",
		"Traffic",
		"30 for 30: Charismatic",
		"The Tale of Despereaux",
		"King of the Hill",
		"And Everything Is Going Fine",
		"Diameter of the Bomb",
		"The Future We Will Create: Inside the World of TED",
		"Barney: Sing & Dance with Barney",
		"1941",
		"Human Lampshade: A Holocaust Mystery",
		"Secrets of the Dead: Bones of the Buddha",
		"Without a Paddle",
		"Mission Blue",
		"Eddie Pepitone: In Ruins",
		"So Much, So Fast",
		"Troublesome Creek: A Midwestern",
		"Hitler's G.I Death Camp",
		"The Substitute 2: School's Out",
		"Decoding Annie Parker",
		"Shane",
		"Innocent Moves",
		"Old Yeller",
		"Barney: Most Huggable Moments",
		"Barney: A Super-Dee-Duper Day!",
		"Mr. Deeds",
		"Hot Pursuit",
		"Adrenalin: Fear the Rush",
		"Top Cat: The Movie",
		"Two Roses and a Golden Rod",
		"Invasion",
		"Mother",
		"Perlasca",
		"Dark Planet",
		"Spitfire",
		"Heatseeker",
		"Son of Hercules vs. Medusa",
		"Brainsmasher: A Love Story",
		"The Gates",
		"They Made Me a Fugitive",
		"Postmortem",
		"30 for 30: Muhammad and Larry",
		"La Leyenda de la Llorona",
		"What Goes Around Comes Around",
		"What My Husband Doesn't Know",
		"Abelar: Tales of an Ancient Empire",
		"The Red Balloon",
		"White Mane",
		"Viva Cuba",
		"China's Mega Dam",
		"The Devil's Triangle",
		"Cyborg",
		"Charlotte's Web 2: Wilbur's Great Adventure",
		"Lisa & the Devil",
		"The Girl Who Knew Too Much",
		"Roy Colt and Winchester Jack",
		"Black Sunday",
		"Kill, Baby... Kill!",
		"The House of Exorcism",
		"Bay of Blood",
		"Black Sabbath",
		"Baron Blood",
		"Knives of the Avenger",
		"We the Party",
		"The Dragon Pearl",
		"Top Secret",
		"Boccaccio '70",
		"Casanova '70",
		"Kidnapped",
		"Hatchet for the Honeymoon",
		"5 Dolls for an August Moon",
		"Redemption Road",
		"All Things Fall Apart",
		"Little Matchmakers",
		"Robbing Peter",
		"30 for 30: Brothers in Exile",
		"Unidentified",
		"Fantastic Voyage",
		"16 Acres",
		"Pablo",
		"Frankenstein's Army",
		"Les Miserables",
		"The Devil's Miner",
		"The Swan Princess: The Mystery of the Enchanted Treasure",
		"The Swan Princess Christmas",
		"The Swan Princess and the Secret of the Castle",
		"The Swan Princess",
		"James Patterson's Suzanne's Diary for Nicholas",
		"Darkwolf",
		"Leap of Faith",
		"Hardware",
		"Scrooged",
		"The Wedding Gift",
		"The Proposal",
		"The Long Walk Home",
		"The Thief and the Cobbler",
		"Freedom Writers",
		"Mexico City",
		"Tora! Tora! Tora!",
		"Dust Devil",
		"Oxygen",
		"Girls Will Be Girls",
		"LEGO: Marvel Super Heroes: Maximum Overload",
		"The Rape of Europa",
		"Cloak & Dagger",
		"The Freedom of Silence",
		"Timeline",
		"Solar Crisis",
		"Love Actually",
		"Doctor Dolittle",
		"Donnie Darko",
		"Fred Won't Move Out",
		"Midnight Matinee",
		"How to Die in Oregon",
		"The Big Boodle",
		"The American Snitch",
		"Berlin Tunnel 21",
		"And Your Name Is Jonah",
		"Disaster on the Coastliner",
		"Collusion",
		"Out of Control",
		"Bill Cunningham New York",
		"The Hunting Party",
		"Slacker",
		"The Eleanor Roosevelt Story",
		"Vampires: Out for Blood",
		"Bongwater",
		"The Theatre Bizarre",
		"The Fox and the Hound",
		"Bernie",
		"Shooting Robert King",
		"Entrance",
		"The Haunting of Julia",
		"Class of Nuke 'Em High",
		"Abraham Lincoln vs. Zombies",
		"In a Day",
		"Submarine",
		"Black Adder's A Christmas Carol",
		"K-9: P.I.",
		"Grey Owl",
		"Vamp",
		"Triumph of the Heart",
		"Conan the Destroyer",
		"Colma: The Musical",
		"Masterpiece Mystery!: The Inspector Lynley Mysteries: For the Sake of Elena",
		"Masterpiece Mystery!: The Inspector Lynley Mysteries: Missing Joseph",
		"Ayahuasca: Vine of the Soul",
		"Waking Life",
		"The United States of Autism",
		"Gandhi",
		"Air Bud: Golden Receiver",
		"The Newton Boys",
		"Chaplin: The Movie",
		"Naked As We Came",
		"Mine Games",
		"Alpha and Omega: A Howl-iday Adventure",
		"Alpha and Omega 3: The Great Wolf Games",
		"The Double",
		"Season of a Lifetime",
		"Cesar's Last Fast",
		"Girl Rising",
		"Penny Dreadful",
		"School of Rock",
		"Swan Princess: A Royal Family Tale",
		"The Omen",
		"Alpha and Omega: The Legend of the Saw Tooth Cave",
		"The Making of a Lady",
		"Amityville 3",
		"Confessions of a Brazilian Call Girl",
		"Break Up",
		"Papadopoulos & Sons",
		"Hating Breitbart",
		"Katt Williams: Kattpacalypse",
		"The Haunting of Hell House",
		"The Collection",
		"Tripping Forward",
		"One Fall",
		"Choose",
		"Mike Epps: Under Rated & Never Faded",
		"The Juror",
		"Braveheart",
		"Biebermania!",
		"The Passion of the Christ",
		"Rihanna: Good Girl, Bad Girl",
		"666 Revealed",
		"Checkered Flag or Crash",
		"The Little Prince",
		"Guess Who's Coming to Dinner",
		"Dr. Strangelove",
		"Hardware",
		"Without a Trace",
		"Supercop",
		"Dust Devil",
		"China Strike Force",
		"4 Assassins",
		"Bedazzled",
		"Big Night",
		"Screamtime",
		"The Theatre Bizarre",
		"Charade",
		"Joe Gould's Secret",
		"Funny Face",
		"Paths of Glory",
		"Perfect Sisters",
		"Kiss Them for Me",
		"Jake Blauvelt: Naturally",
		"Least Among Saints",
		"Taxi Driver",
		"Vertical Limit",
		"The Long, Hot Summer",
		"Smithsonian Channel: Titanoboa",
		"Schooled: The Price of College Sports",
		"Raging Bull",
		"I Got the Hook Up",
		"Beverly Hills Cop",
		"Tomorrow Will Be Better",
		"Stalker",
		"In Bruges",
		"Ballplayer: Pelotero",
		"Beyond Borders",
		"Le Quattro Volte",
		"Beneath the Darkness",
		"The Anderson Monarchs",
		"Midnight Matinee",
		"Daddy's Girl",
		"Son of Hercules vs. Medusa",
		"Man of Her Dreams",
		"The Last Temptation of Christ",
		"100 Ghost Street: The Return of Richard Speck",
		"Collaborator",
		"Undefeated",
		"Hick",
		"The Sex Thief",
		"V/H/S",
		"Hugo",
		"Parasitic",
		"Saving Faith",
		"30 for 30: Roll Tide / War Eagle",
		"Gigli",
		"Nova: Building Pharoah's Chariot",
		"Secret Weapon of the Confederacy",
		"Air Bud: Golden Receiver",
		"Air Bud",
		"Day of the Siege",
		"Still Mine",
		"Violette",
		"Sucker Punch",
		"Cannibal",
		"The Wolf of Wall Street",
		"Viktor",
		"All This Mayhem",
		"The Good Life",
		"The Brooke Ellison Story",
		"Dear Mandela",
		"A League of Ordinary Gentlemen",
		"Jack Reacher",
		"The Englishman Who Went Up a Hill but Came Down a Mountain",
		"54",
		"Hav Plenty",
		"Following",
		"A Band Called Death",
		"Memento",
		"Cougar Club",
		"G-Men from Hell",
		"A Cold Day in Hell",
		"Chinese Boxes",
		"Patty Duke Show: Still Rockin' in Brooklyn Heights",
		"The Vector File",
		"All Hell Broke Loose",
		"Shark Week",
		"The Cottage",
		"Priest of Love",
		"False Witness",
		"Genetic Chile",
		"Goats",
		"Robotropolis",
		"A Second Knock at the Door",
		"Answer This!",
		"2-Headed Shark Attack",
		"The Rainbow Tribe",
		"Imagining Argentina",
		"Black Death",
		"Sangre de Mi Sangre",
		"Dracula's Widow",
		"The Man Who Lost His Face",
		"Why Ships Sink: Nova",
		"The Forsyte Saga",
		"Rin: Daughters of Mnemosyne",
		"Miss Marple: A Caribbean Mystery",
		"First Night",
		"Tiny: A Story About Living Small",
		"The Conspiracy",
		"Storm Surfers",
		"The Next Karate Kid",
		"Asteroid vs. Earth",
		"Mercenaries",
		"Get Santa",
		"Paranormal Activity: The Marked Ones",
		"Paranormal Activity: The Marked Ones (Extended Version)",
		"Secrets in the Walls",
		"Insomnia",
		"Son of God",
		"This Ain't No Mouse Music!",
		"Four Seasons",
		"The Truth Behind: UFOs over Phoenix"
		);

		public function getNameMovie()
		{
			return $this->movies[rand(0, count($this->movies))];
		}


}