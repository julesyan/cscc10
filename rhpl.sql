USE cscc10;

CREATE TABLE itemTypes(
	name VARCHAR(50) NOT NULL UNIQUE
);

CREATE TABLE items(
	name VARCHAR(100),
	author VARCHAR(100),
	subject VARCHAR(100),
	genre VARCHAR(100),
	language VARCHAR(50),
	cover VARCHAR(100),
	excerpt VARCHAR(1000),
	summary VARCHAR(1000),
	phyDescp VARCHAR(100),
	ageLevel VARCHAR(30) CHECK (ageLevel IN ("Adult", "Children's", "Young Adult")),
	isbn INTEGER,
	pubDate YEAR(4),
	typeOfBook VARCHAR(50),
	totalAvailable INTEGER,
	CONSTRAINT ItemType_FK FOREIGN KEY (typeofBook) REFERENCES itemTypes(name)
);

INSERT INTO itemTypes (name)
	VALUES 	('Book'),
			('Electronic Resources'),
			('eBook'),
			('Video disc'),
			('eVideo'),
			('Music Sound Recording'),
			('Audio disc'),
			('eAudiobook'),
			('Sound recording'),
			('Continuing Resources'),
			('Visual Materials'),
			('Music'),
			('Kit'),
			('Audio cassette'),
			('Video cassette'),
			('Atlas'),
			('Microform'),
			('Maps'),
			('Other'),
			('Computer file'),
			('Regular print'),
			('Remote sensing image');



-- Content for the 'Margaret Atwood' search
INSERT INTO items (name, author, subject, genre, language, cover, excerpt, summary, phyDescp, ageLevel, isbn, pubDate, typeOfBook, totalAvailable)
	VALUES	(	'Margaret Atwood',
				'Bloom, Harold',
				'',
				'Non-Fiction',
				'English',
				'atwood.jpeg',
				'The Canadian novelist and poet is among the most acclaimed writers today. Excerpted from Margaret Atwood by Harold Bloom All rights reserved by the original copyright owners. Excerpts are provided for display purposes only and may not be reproduced, reprinted or distributed without the written permission of the publisher.',
				"Harold Bloom was born on July 11, 1930 in New York City. He earned his Bachelor of Arts from Cornell in 1951 and his Doctorate from Yale in 1955.

After graduating from Yale, Bloom remained there as a teacher, and was made Sterling Professor of Humanities in 1983. Bloom's theories have changed the way that critics think of literary tradition and has also focused his attentions on history and the Bible. He has written over twenty books and edited countless others. He is one of the most famous critics in the world and considered an expert in many fields. In 2010 he became a founding patron of Ralston College, a new institution in Savannah, Georgia, that focuses on primary texts.

His works include Fallen Angels, Till I End My Song: A Gathering of Last Poems, Anatomy of Influence: Literature as a Way of Life and The Shadow of a Great Rock: A Literary Appreciation of The King James Bible.

(Bowker Author Biography)",
				'vii, 256 p. ; 25 cm.',
				'Adult',
				9780791056592,
				2000,
				'Book',
				2),

			(	'Margaret Atwood',
				'Frank Davey',
				'Books & Reading, Canadian, Feminist, Literary Criticism, Semiotics & Theory',
				'Non-Fiction',
				'English',
				'atwood-fem.jpeg',
				"Frank Davey
Born in Vancouver, Frank Davey attended the University of British Columbia where he was a co-founder of the avant-garde poetry magazine TISH . Since 1963, he has been the editor-publisher of the poetics journal Open Letter . In addition, he co-founded the world's first on-line literary magazine, SwiftCurrent in 1984. Davey writes with a unique panache as he examines with humour and irony the ambiguous play of signs in contemporary culture, the popular stories that lie behind it, and the struggles between different identity-based groups in our globalizing society--racial, regional, gender-based, ethnic, economic--that drive this play.

",
				"Margaret Atwood's writing, according to Davey, reveals not only an extraordinary facility with language, but also a deep mistrust of it as something shaped by an instrumental and largely male culture. Her language directs its readers to a hidden level of itself - unspoken, symbolic, gestural - and away from denotative meaning.",
				'',
				'Adult',
				'',
				2014,
				'eBook',
				1),

			(	'Margaret Atwood revisted',
				'Stein, Karen F., 1941-',
				'',
				'Non-Fiction',
				'English',
				'',
				"When Jerome H. Rosenberg's Margaret Atwood (CH, Jan'85) appeared, it was the second critical study of that writer. One of Stein's problems is that the literature on Atwood now includes more than two dozen books. Another is that Atwood has continued to publish novels, short fiction, poetry, criticism, and other writing at a prolific rate for the last 15 years. Stein (Univ. of Rhode Island) tries to account for it all, while also providing a sense of the rich critical debates that Atwood has inspired--a task impossible in the confines of a Twayne book. Stein nonetheless has valuable things to say, especially about the novels. Although her discussions of the poetry and short fiction are brief and frustratingly general, each of the nine novels receives an incisive if compressed treatment. Stein is especially good on the themes that pervade Atwood's work, such as the status of storytelling and gender: \"Many of Atwood's protagonists are Scheherazades, narrating their stories to win over hostile listeners.\" Like all Twayne books, this one is designed for the introductory student, whom it will serve well. T. Ware; Queen's University at Kingston",
				"Award-winning Canadian poet, novelist, and critic, author of \"The Handmaid's Tale\" (1985), known for her Canadian nationalism and feminism.",
				'xx, 176 p. ; 23 cm.',
				'Adult',
				9780805716146,
				1999,
				'Book',
				1);
