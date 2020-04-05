import {configure} from 'enzyme'
import Adapter from 'enzyme-adapter-react-16'
import 'jest-enzyme'
import 'jest-styled-components'

// Set up Enzyme
configure({adapter: new Adapter()})

// Add default mocks
jest.mock('~/common/theme/variables')

// Add code to execute before tests are run
