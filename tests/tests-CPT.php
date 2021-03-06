<?php
class Cpt_Tests extends AnsPress_UnitTestCase
{

	public function setUp() {
		// before
		parent::setUp();
		// your set up methods here
	}

	public function tearDown() {
		// your tear down methods here
		// then
		parent::tearDown();
	}

	public function test_question_post_type() {
		global $wp_post_types;
		$this->assertArrayHasKey( 'question', $wp_post_types );
	}

	public function test_question_post_type_labels() {
		global $wp_post_types;
		$this->assertEquals( 'Questions', $wp_post_types['question']->labels->name );
		$this->assertEquals( 'Question', $wp_post_types['question']->labels->singular_name );
		$this->assertEquals( 'New question', $wp_post_types['question']->labels->add_new );
		$this->assertEquals( 'Add new question', $wp_post_types['question']->labels->add_new_item );
		$this->assertEquals( 'Edit question', $wp_post_types['question']->labels->edit_item );
		$this->assertEquals( 'View question', $wp_post_types['question']->labels->view_item );
		$this->assertEquals( 'Search questions', $wp_post_types['question']->labels->search_items );
		$this->assertEquals( 'No question found', $wp_post_types['question']->labels->not_found );
		$this->assertEquals( 'No questions found in trash', $wp_post_types['question']->labels->not_found_in_trash );
		$this->assertEquals( 'All questions', $wp_post_types['question']->labels->all_items );
		$this->assertEquals( 'Questions', $wp_post_types['question']->labels->menu_name );
		$this->assertEquals( 1, $wp_post_types['question']->publicly_queryable );
		$this->assertEquals( 1, $wp_post_types['question']->has_archive );
		$this->assertEquals( 'question', $wp_post_types['question']->query_var );
		$this->assertEquals( 'Questions', $wp_post_types['question']->label );
	}

	public function test_answer_post_type() {
		global $wp_post_types;
		$this->assertArrayHasKey( 'answer', $wp_post_types );
	}

	public function test_answer_post_type_labels() {
		global $wp_post_types;
		$this->assertEquals( 'Answers', $wp_post_types['answer']->labels->name );
		$this->assertEquals( 'Answer', $wp_post_types['answer']->labels->singular_name );
		$this->assertEquals( 'New answer', $wp_post_types['answer']->labels->add_new );
		$this->assertEquals( 'Add new answer', $wp_post_types['answer']->labels->add_new_item );
		$this->assertEquals( 'Edit answer', $wp_post_types['answer']->labels->edit_item );
		$this->assertEquals( 'View answer', $wp_post_types['answer']->labels->view_item );
		$this->assertEquals( 'Search answers', $wp_post_types['answer']->labels->search_items );
		$this->assertEquals( 'No answer found', $wp_post_types['answer']->labels->not_found );
		$this->assertEquals( 'No answer found in trash', $wp_post_types['answer']->labels->not_found_in_trash );
		$this->assertEquals( 'All answers', $wp_post_types['answer']->labels->all_items );
		$this->assertEquals( 'Answers', $wp_post_types['answer']->labels->menu_name );
		$this->assertEquals( 1, $wp_post_types['answer']->publicly_queryable );
		$this->assertEquals( 1, $wp_post_types['answer']->has_archive );
		$this->assertEquals( 'Answers', $wp_post_types['answer']->label );
	}

	public function test_register_post_statuses() {
		AnsPress_Post_Status::register_post_status();
		global $wp_post_statuses;

		$this->assertInternalType( 'object', $wp_post_statuses['moderate'] );
		$this->assertInternalType( 'object', $wp_post_statuses['private_post'] );
	}
}