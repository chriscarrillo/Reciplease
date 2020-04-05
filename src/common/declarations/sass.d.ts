declare module '*.scss' {
  interface LookupTable {
    [key: string]: string
  }
  const lookupTable: LookupTable
  export = lookupTable
}
