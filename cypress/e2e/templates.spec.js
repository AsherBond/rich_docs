/**
 * SPDX-FileCopyrightText: 2023 Julius Härtl <jus@bitgrid.net>
 * SPDX-License-Identifier: AGPL-3.0-or-later
 */
describe('Create new office files from templates', function() {

	let randUser
	before(function() {
		cy.createRandomUser().then(user => {
			randUser = user
			cy.createFolder(randUser, 'Templates-user')
			cy.uploadFile(randUser, 'templates/presentation.otp', 'application/vnd.oasis.opendocument.presentation', '/Templates-user/presentation.otp')
			cy.setPersonalTemplateFolder(randUser, '/Templates-user')
		})
	})

	it('Create a new file from a user template', function() {
		cy.visit('/apps/files')
		cy.get('.files-controls .button.new')
			.should('be.visible')
			.click()

		cy.get('.newFileMenu', { timeout: 10000 })
			.should('be.visible')
			.contains('.menuitem', 'New presentation')
			.as('menuitem')
			.should('be.visible')
			.click()

		cy.get('@menuitem').find('.filenameform input[type=text]').type('FileFromTemplate')
		cy.get('@menuitem').find('.filenameform .icon-confirm').click()

		cy.get('.templates-picker__form')
			.as('form')
			.should('be.visible')
			.contains('.template-picker__label', 'presentation')
			.should('be.visible')
			.click()

		cy.get('@form').find('.templates-picker__buttons input[type=submit]').click()

		cy.waitForViewer()
		cy.waitForCollabora()
	})

	it('Create a file from a system template as user', () => {
		cy.uploadSystemTemplate()
		cy.login(randUser)
		cy.visit('/apps/files')
		cy.get('.files-controls .button.new')
			.should('be.visible')
			.click()

		cy.get('.newFileMenu', { timeout: 10000 })
			.should('be.visible')
			.contains('.menuitem', 'New presentation')
			.as('menuitem')
			.should('be.visible')
			.click()

		cy.get('@menuitem').find('.filenameform input[type=text]').type('FileFromTemplate')
		cy.get('@menuitem').find('.filenameform .icon-confirm').click()

		cy.get('.templates-picker__form')
			.as('form')
			.should('be.visible')
			.contains('.template-picker__label', 'systemtemplate')
			.should('be.visible')
			.click()

		cy.get('@form').find('.templates-picker__buttons input[type=submit]').click()

		cy.waitForViewer()
		cy.waitForCollabora()
	})

	it.only('Create a file from a system template as guest', () => {
		cy.uploadSystemTemplate()
		cy.createFolder(randUser, '/my-share')

		cy.shareLink(randUser, '/my-share', { permissions: 31 }).then((token) => {
			cy.visit(`/s/${token}`, {
				onBeforeLoad(win) {
					cy.spy(win, 'postMessage').as('postMessage')
				},
			})

			cy.get('.files-controls .button.new')
				.should('be.visible')
				.click()

			cy.get('.newFileMenu', { timeout: 10000 })
				.should('be.visible')
				.contains('.menuitem', 'New presentation')
				.as('menuitem')
				.should('be.visible')
				.click()

			cy.get('@menuitem').find('.filenameform input[type=text]').type('FileFromTemplate')
			cy.get('@menuitem').find('.filenameform .icon-confirm').click()

			cy.get('#template-picker')
				.as('form')
				.should('be.visible')
				.contains('h2', 'systemtemplate')
				.should('be.visible')
				.click()

			cy.get('.oc-dialog').find('button.primary').click()

			cy.waitForViewer()
			cy.waitForCollabora()
		})
	})
})
