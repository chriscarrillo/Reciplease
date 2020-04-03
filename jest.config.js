'use strict'

module.exports = {
  collectCoverage: true,
  coverageThreshold: {
    global: {
      branches: 100,
      functions: 100,
      lines: 100,
      statements: 100,
    },
  },
  moduleNameMapper: {
    '\\.(png|svg|jpg)$': '<rootDir>/jest/file-mock.ts',
    '\\.s?css$': 'identity-obj-proxy',
  },
  preset: '@jupl/ts',
  setupFiles: ['dotenv/config'],
  setupFilesAfterEnv: ['<rootDir>/jest/setup.ts'],
  snapshotSerializers: ['enzyme-to-json/serializer'],
  testPathIgnorePatterns: ['/node_modules/', '/\\.cache/'],
}
